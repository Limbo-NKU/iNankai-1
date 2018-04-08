<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    public function __construct(){
      parent::__construct();
      $this->load->database();
      $this->load->library('session');
    }
    public function index() {
       
    }
    /**
     * 检查username是否已被使用
     * @param username　用户名
     * @return -1: 已被使用; 1: 未被使用
     */
    public function checkname($username='') {
      $sql = 'select * from user_info where user_name = '.$this->db->escape($username);
      $res = $this->db->query($sql);
      if ($res->num_rows() > 0) {
        return array('flag' => -1);
      } else {
        return array('flag' => 1);
      }
    }
    /**
     * 用户注册
     * @param username 用户昵称
     * @param password 用户密码
     * @param email 用户注册用邮箱
     * @return -1: 帐号已存在；-2: 插入数据库失败；-3: 用户名已存在； 1: 插入数据库成功
     */
    public function signup($username='', $password='', $email='') {
      // 先检查是否已经存在该帐号
      if ($this->checkname($username)['flag'] === -1) {
        return array('flag' => -3);
      }
      $sql = 'select * from login_info where user_email = '.$this->db->escape($email);
      $res = $this->db->query($sql);
      if ($res->num_rows() > 0) {
        // 已经存在该帐号
        return array('flag' => -1);
      }
      // 为用户生成id
      // 随机生成长度为4的盐，并将密码进行sha256哈希
      $salt = strval(rand(pow(10, 3), pow(10, 4) - 1));
      $password = hash('sha256', $password.$salt);
      // 将数据存入数据存入数据库中
      $headicon = 'https://avatars2.githubusercontent.com/u/9383171?s=64&v=4';
      $sql = 'insert into user_info(user_name, user_last_signin, user_authority, user_status, user_portrait, user_nickname, user_signup_time)'.' values('.$this->db->escape($username).','.$this->db->escape(date('Y-m-d H:i:s', time())).','.$this->db->escape(0).','.$this->db->escape(0).','.$this->db->escape($headicon).','.$this->db->escape($username).','.$this->db->escape(date('Y-m-d H:i:s', time())).');';
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
      foreach ($res->result() as $row) {
        $uid = $row->user_id;
      }
      $sql = 'insert into login_info(user_id, user_name, user_password, user_salt, user_email, user_authority) values('.$this->db->escape($uid).','.$this->db->escape($username).','.$this->db->escape($password).','.$this->db->escape($salt).','.$this->db->escape($email).','.$this->db->escape(0).')';
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
     * 用户登录
     * @param account 用户登录帐号(邮箱或者username)
     * @param password 用户登录密码
     * @return -1: 帐号不存在; -2: 密码错误; 1: 登录成功
     */
    public function signin($account='', $password='') {
      // 先检查是否存在该用户
      $sql = 'select * from login_info where user_email = '.$this->db->escape($account).' or user_name = '.$this->db->escape($account);
      $res = $this->db->query($sql);
      if ($res->num_rows() === 0) {
        // 不存在该帐号
        return array('flag' => -1);
      }
      // 获取用户账号信息，并检查密码是否正确
      $type = 0; // 账号类型，0表示用户，1表示社团
      foreach ($res->result() as $row) {
        $correct_password = $row->user_password;
        $salt = $row->user_salt;
        $uid = $row->user_id;
        $type = $row->user_authority;
      }
      $temp_password = hash('sha256', $password.$salt);
      if ($temp_password !== $correct_password) {
        // 密码错误
        return array('flag' => -2);
      }
      // 设置session
      $this->session->set_userdata('uid', $uid);
      if ($type === '0') $this->session->set_userdata('type', 0);
      else if ($type === '1') $this->session->set_userdata('type', 1);
      else if ($type === '2') $this->session->set_userdata('type', 2);
      return array('flag' => 1, 'account_type' => $type);
    }
    /**
     * 用户登出
     * @return -1: 用户未登录; 1: 登出成功
     */
    public function signout() {
      //  目前比较粗糙，可能需要修改数据库中的用户状态信息
      if ($this->session->has_userdata('uid')) {
        $this->session->unset_userdata('uid');
        $this->session->unset_userdata('type');
        return array('flag' => 1);
      } else {
        return array('flag' => -1);
      }
    }
    /**
     * 获取用户信息(社团也可调用该方法)
     * @return -1: 尚未登录；-2: 信息获取失败； 1：信息获取成功
     */
    public function userinfo() {
      if ($this->session->has_userdata('uid')) {
        $uid = $this->session->uid;
        $type = $this->session->type;
        if ($type === 0) $sql = 'select * from user_info where user_id = '.$this->db->escape(intval($uid));
        else $sql = 'select * from club_user_info where club_user_id = '.$this->db->escape(intval($uid));
        $res = $this->db->query($sql);
        if ($res->num_rows() === 0) {
          return array('flag' => -2);
        }
        foreach ($res->result() as $row) {
          if ($type === 0) {
            $data = array(
              'portrait' => $row->user_portrait,
              'nickname' => $row->user_nickname,
              'signup_time' => $row->user_signup_time,
              'name' => $row->user_name
            );
          } else {
            $data = array(
              'portrait' => $row->user_portrait,
              'email' => $row->club_email,
              'contact' => $row->club_contact,
              'sub_count' => $row->club_sub_count,
              'name' => $row->club_user_name,
              'signup_time' => $row->user_signup_time,
              'introduction' => $row->club_introduction
            );
          }
        }
        return array('flag' => 1, 'data' => $data);
      } else {
        return array('flag' => -1);
      }
    }
    /**
     * 修改用户信息
     * @param new_nick 用户新名称
     * @param new_potrait 用户新头像
     * @return -1: 未登录; -2: 修改失败; 1: 修改成功
     */
    public function modifyinfo($new_nick='', $new_potrait='') {
      if (!$this->session->has_userdata('uid') || $this->session->type !== 0) {
        return array('flag' => -1);
      }
      $uid = $this->session->uid;
      $sql = 'update user_info set user_nickname = '.$this->db->escape($new_nick)
      .',user_portrait = '.$this->db->escape($new_potrait).' where user_id = '
      .$this->db->escape($uid);
      $res = $this->db->query($sql);
      if ($this->db->affected_rows() === 0) {
        return array('flag' => -2);
      } else {
        return array('flag' => 1);
      }
    }
    /**
     * 用户添加关注社团(untested)
     * @param lid 社团id
     * @return -1: 用户未登录; -2: 不存在该社团; -3: 用户已经关注社团; -4: 关注失败; 1: 关注成功
     */
    public function addattention($lid='') {
      if (!$this->session->has_userdata('uid') || $this->session->type !== 0) {
        return array('flag' => -1);
      }
      $uid = $this->session->uid;
      // 检查是否存在该社团
      $sql = 'select * from club_user_info where club_user_id = '.$this->db->escape($lid);
      $res = $this->db->query($sql);
      if ($res->num_rows() === 0) {
        return array('flag' => -2);
      }
      // 检查该用户是否已经已经关注该社团
      $sql = 'select * from subscribe where subscriber_user_id = '.$this->db->escape($uid).' and subscribed_user_id = '.$this->db->escape($lid);
      $res = $this->db->query($sql);
      if ($res->num_rows() > 0) {
        return array('flag' => -3);
      }
      // 涉及到的表有club_user_info，subscribe
      $sql = 'update club_user_info set club_sub_count = club_sub_count + 1 where user_id = '.$this->db->escape($lid);
      $this->db->query($sql);
      if ($this->db->affected_rows() === 0) {
        return array('flag' => -4);
      }
      $sql = 'insert into subscribe values('.$this->db->escape($uid).','.$this->db->escape($lid).')';
      $this->db->query($sql);
      if ($this->db->affected_rows() === 0) {
        $sql = 'update club_user_info set club_sub_count = club_sub_count - 1 where user_id = '.$this->db->escape($lid);
        $this->db->query($sql);
        return array('flag' => -4);
      }
      return array('flag' => 1);
    }
    /**
     * 用户取消关注社团(untested)
     * @param lid 社团id
     * @return -1: 用户未登录; -2: 不存在该社团; -3: 用户没有关注该社团; -4: 取消失败; 1: 取消关注成功
     */
    public function cancelattention($lid='') {
      if (!$this->session->has_userdata('uid')) {
        return array('flag' => -1);
      }
      $uid = $this->session->uid;
      // 检查是否存在该社团
      $sql = 'select * from club_user_info where user_id = '.$this->db->escape($lid);
      $res = $this->db->query($sql);
      if ($res->num_rows() === 0) {
        return array('flag' => -2);
      }
      // 检查该用户是否已经已经关注该社团
      $sql = 'select * from subscribe where subscriber_user_id = '.$this->db->escape($uid).' and subscribed_user_id = '.$this->db->escape($lid);
      $res = $this->db->query($sql);
      if ($res->num_rows() === 0) {
        return array('flag' => -3);
      }
      // 涉及到的表有club_user_info，subscribe
      $sql = 'update club_user_info set club_sub_count = club_sub_count - 1 where user_id = '.$this->db->escape($lid);
      $this->db->query($sql);
      if ($this->db->affected_rows() === 0) {
        return array('flag' => -4);
      }
      $sql = 'delete from subscribe where subscriber_user_id = '.$this->db->escape($uid).' and subscribed_user_id = '.$this->db->escape($lid).')';
      $this->db->query($sql);
      if ($this->db->affected_rows() === 0) {
        $sql = 'update club_user_info set club_sub_count = club_sub_count ＋ 1 where user_id = '.$this->db->escape($lid);
        $this->db->query($sql);
        return array('flag' => -4);
      }
      return array('flag' => 1);
    }
    /**
     * 用户修改密码
     * @param old_pass 用户旧密码
     * @param new_pass 用户新密码
     * @return -1: 帐号未登录; -2: 帐号不存在 -3: 旧密码错误; -4: 密码修改失败; 1: 密码修改成功
     */
    public function modifypass($old_pass='', $new_pass='') {
      if (!$this->session->has_userdata('uid')) {
        return array('flag' => -1);
      }
      $uid = $this->session->uid;
      // 找到该用户
      $sql = 'select * from login_info where user_id = '.$this->db->escape($uid);
      $res = $this->db->query($sql);
      if ($res->num_rows() === 0) {
        return array('flag' => -2);
      }
      foreach ($res->result() as $row) {
        $correct_password = $row->user_password;
        $salt = $row->user_salt;
      }
      $temp_pass = hash('sha256', $old_pass.$salt);
      if ($temp_pass !== $correct_password) {
        return array('flag' => -3);
      }
      $password = hash('sha256', $new_pass.$salt);
      $sql = 'update login_info set user_password = '.$this->db->escape($password);
      $res = $this->db->query($sql);
      if ($this->db->affected_rows() === 0) {
        return array('flag' => -4);
      } else {
        return array('flag' => 1);
      }      
    }
  }
?>