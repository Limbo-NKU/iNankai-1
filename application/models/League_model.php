<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class League_model extends CI_Model {
    public function __construct(){
      parent::__construct();
      $this->load->database();
      $this->load->library('session');
    }
    public function index() {
       
    }
    /**
     * 生成50个邀请码
     * @return -2:生成邀请码失败 -1:未登录 1：成功
     */
    public function addinvitecode() {
      // 必须先检查当前是否是管理员登录
      if (!$this->session->has_userdata('uid') || $this->session->type !== 3) {
        return array('flag' => -1);
      }
      $cnt = 50;
      while ($cnt > 0) {
        $cnt = $cnt - 1;
        $code = md5(time().strval($cnt));
        $sql = 'insert into invitation(invitation_code) values('.$this->db->escape($code).')';
        $this->db->query($sql);
      }
      if ($this->db->affected_rows() === 0) {
        return array('flag' => -2);
      } else {
        return array('flag' => 1);
      }
    }
    /**
     * 返回所有邀请码
     * @return -1:未登录 1:查找成功
     */
    public function getallinvitecode() {
      // 必须先检查当前是否是管理员登录
      if (!$this->session->has_userdata('uid') || $this->session->type !== 3) {
        return array('flag' => -1);
      }
      $sql = 'select * from invitation';
      $res = $this->db->query($sql);
      return array('flag' => 1, 'data' => $res->result_array());
    }

    /**
     * 检查username是否已被使用
     * @param username　社团名
     * @return -1: 已被使用; 1: 未被使用
     */
    public function checkname($username='') {
      $sql = 'select * from club_user_info where club_user_name = '.$this->db->escape($username);
      $res = $this->db->query($sql);
      if ($res->num_rows() > 0) {
        return array('flag' => -1);
      } else {
        return array('flag' => 1);
      }
    }
    /**
     * 社团注册
     * @param username 社团名
     * @param password 社团密码
     * @param email 社团邮箱
     * @param invite_code 社团激活码
     * @param introduction 社团介绍
     * @param contact 社团联系方式
     * @return -1: 帐号已存在；-2: 插入数据库失败；-3: 用户名已存在；-4: 激活码已经失效； 1: 插入数据库成功
     */
    public function signup($username='', $password='', $email='', $invite_code='', $introduction='', $contact='') {
      // 社团注册的逻辑是这样的：首先管理员生成一些邀请码，然后给社团一个邀请码，先检查该邀请码是否已被用，如果没被用过，就在user_info表中插入信息，然后在club_user_info中插入信息，然后将该邀请码对应的used_by_id改为社团id
      // 先检查是否已经存在该帐号
      $res = $this->checkname($username);
      if ($res['flag'] === -1) {
        return array('flag' => -3);
      }
      $sql = 'select * from login_info where user_email = '.$this->db->escape($email);
      $res = $this->db->query($sql);
      if ($res->num_rows() > 0) {
        // 已经存在该帐号
        return array('flag' => -1);
      }
      // 检查激活码是否已经失效
      $sql = 'select * from invitation where invitation_code = '.$this->db->escape($invite_code);
      $res = $this->db->query($sql);
      if ($res->num_rows() === 0 || !is_null($res->row()->used_by_id)) {
        // 激活码已经失效
        return array('flag' => -4);
      }
      // 随机生成长度为4的盐，并将密码进行sha256哈希
      $salt = strval(rand(pow(10, 3), pow(10, 4) - 1));
      $password = hash('sha256', $password.$salt);
      // 将数据存入数据存入数据库中
      $headicon = 'https://avatars2.githubusercontent.com/u/9383171?s=64&v=4';
      $sql = 'insert into user_info(user_name, user_last_signin, user_authority, user_status, user_portrait, user_nickname, user_signup_time)'.' values('.$this->db->escape($username).','.$this->db->escape(date('Y-m-d H:i:s', time())).','.$this->db->escape(1).','.$this->db->escape(0).','.$this->db->escape($headicon).','.$this->db->escape($username).','.$this->db->escape(date('Y-m-d H:i:s', time())).');';
      $res = $this->db->query($sql);
      if ($this->db->affected_rows() === 0) {
        return array('flag' => -2);
      }
      // 根据username查找uid
      $uid = 0;
      $sql = 'select * from user_info where user_name = '.$this->db->escape($username);
      $res = $this->db->query($sql);
      if ($res->num_rows() == 0) {
        return array('flag' => -2);
      }
      $uid = $res->row()->user_id;
      $sql = 'insert into login_info(user_id, user_name, user_password, user_salt, user_email, user_authority) values('.$this->db->escape($uid).','.$this->db->escape($username).','.$this->db->escape($password).','.$this->db->escape($salt).','.$this->db->escape($email).','.$this->db->escape(1).')';
      $res = $this->db->query($sql);
      $sql = 'insert into club_user_info values('.$this->db->escape($uid).','.$this->db->escape($introduction).','.$this->db->escape($email).','.$this->db->escape($contact).','.$this->db->escape(0).','.$this->db->escape($headicon).','.$this->db->escape(date('Y-m-d H:i:s', time())).','.$this->db->escape($username).')';
      $this->db->query($sql);
      // 使邀请码失效
      $sql = 'update invitation set used_by_id = '.$this->db->escape($uid).' where 	invitation_code = '.$this->db->escape($invite_code);
      $res = $this->db->query($sql);
      if ($this->db->affected_rows() > 0) {
        // 插入成功
        return array('flag' => 1);
      } else {
        // 插入失败
        return array('flag' => -2);
      }
    }
    /**
     * 返回社团信息(已作废，调用userinfo即可获取社团信息)
     * @return -1: 社团未登录; -2: 获取信息失败; 1: 获取信息成功
     */
    // public function leagueinfo() {
    //   if (!$this->session->has_userdata('club_user_id')) {
    //     return array('flag' => -1);
    //   }
    //   $club_user_id = $this->session->club_user_id;
    //   $sql = 'select * from club_user_info where club_user_id = '.$this->db->escape($club_user_id);
    //   $res = $this->db->query($sql);
    //   if ($res->num_rows() === 0) {
    //     return array('flag' => -2);
    //   }
    //   foreach ($res->result() as $row) {
    //     $data = array(
    //       'club_email' => $row->club_email,
    //       'club_contact' => $row->club_contact,
    //       'club_sub' => $row->club_sub_count,
    //       'club_portrait' => $row->club_portrait,
    //       'club_signup_time' => $row->club_signup_time,
    //       'introduction' => $row->club_introduction
    //     );
    //   }
    //   return array('flag' => 1, 'data' => $data);
    // }
    /**
     * 社团修改信息
     * @param introduction 社团介绍
     * @param contact 社团联系方式
     * @param portrait 社团头像
     * @return -1: 帐号未登录; -2: 修改失败; 1: 修改成功
     */
    public function modifyinfo($introduction='', $contact='', $portrait='') {
      if (!$this->session->has_userdata('uid') || $this->session->type != 1) {
        return array('flag' => -1);
      }
      $club_user_id = $this->session->uid;
      $sql = 'update club_user_info set club_introduction = '.$this->db->escape($introduction).',club_contact = '.$this->db->escape($contact)
      .',club_portrait = '.$this->db->escape($portrait);
      $res = $this->db->query($sql);
      if ($this->db->affected_rows() === 0) {
        return array('flag' => -2);
      } else {
        return array('flag' => 1);
      }
    }
    /**
     * 社团获取关注数 
     * @return -1: 账号未登录 1: 返回成功
     */
    public function getfocusnum() {
      if (!$this->session->has_userdata('uid') || $this->session->type != 1) {
        return array('flag' => -1);
      }
      $club_user_id = $this->session->uid;
      $sql = 'select club_sub_count from club_user_info where club_user_id = '.$this->db->escape($club_user_id);
      $res = $this->db->query($sql);
      $focus_num = 0;
      foreach ($res->result() as $row) {
        $focus_num = $row->club_sub_count;
      }
      return array('flag' => 1, 'data' => array('cnt' => $focus_num));
    }
  }
?>