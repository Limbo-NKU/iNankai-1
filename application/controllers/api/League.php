<?php

class League extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('League_model', 'league');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }
    public function index()
    {
       echo 'api/League';
    }
    /**
     * use to make a info
     *
     * @param int $Flag - the flag
     * @param string $Content -the content
     * @param string $Extra -the extra info
     * @return array
     */
    private function getInfo($flag=100, $content='', $extra=''){
      $info = array('flag' => $flag, 'content' => $content, 'extra' => $extra);
      return $info;
    }
    private function myecho($flag=100, $content='', $extra='') {
      return urldecode(json_encode($this->getInfo($flag, $content, $extra)));
    }
    /**
     * 添加注册码(应该是管理员的API)
     */
    public function addinvitecode() {
      $res = $this->league->addinvitecode();
      if ($res['flag'] === -1) {
        echo $this->myecho(-6, '未登录', '');
      } else if ($res['flag'] === -1) {
        echo $this->myecho(-18, '生成邀请码失败', '');
      } else {
        echo $this->myecho(100, '生成邀请码成功', '');
      }
    }
    /**
     * 获取所有社团的注册码(应该是管理员的API)
     */
    public function getallinvitecode() {
      $res = $this->league->getallinvitecode();
      if ($res['flag'] === -1) {
        echo $this->myecho(-6, '未登录', '');
      } else {
        echo $this->myecho(100, '获取邀请码成功', $res['data']);
      }
    }
    /**
     * 社团注册
     */
    public function signup() {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $email = $this->input->post('email');
      $invite_code = $this->input->post('invite_code');
      $contact = $this->input->post('contact');
      $introduction = $this->input->post('introduction');
      if (!isset($username) || !isset($password) || !isset($email) || !isset($invite_code) || !isset($introduction) || !isset($contact)) {
        echo $this->myecho(-1, '缺少参数', '');
        return;
      }
      $res = $this->league->signup($username, $password, $email, $invite_code, $introduction, $contact);
      if ($res['flag'] === -1) {
        echo $this->myecho(-2, '帐号已存在', '');
      } else if ($res['flag'] === -2) {
        echo $this->myecho(-3, '注册失败', '');
      } else if ($res['flag'] === -3) {
        echo $this->myecho(-9, '用户名已存在', '');
      } else if ($res['flag'] === -4) {
        echo $this->myecho(-15, '激活码已失效', '');
      } else {
        echo $this->myecho(100, '注册成功', '');
      }
    }
    /**
     * 获取社团信息
     */
    public function leagueinfo() {
      $res = $this->league->leagueinfo();
      if ($res['flag'] === -1) {
        echo $this->myecho(-6, '帐号未登录', '');
      } else if ($res['flag'] === -2) {
        echo $this->myecho(-7, '信息获取失败', '');
      } else {
        echo $this->myecho(100, '信息获取成功', $res['data']);
      }
    }
    /**
     * 社团修改信息
     */
    public function modifyinfo() {
      $introduction = $this->input->post('introduction');
      $contact = $this->input->post('contact');
      $portrait = $this->input->post('portrait');
      if (!isset($introduction) || !isset($contact) || !isset($portrait)) {
        echo $this->myecho(-1, '缺少参数', '');
        return;
      }
      $res = $this->league->modifyinfo($introduction, $contact, $portrait);
      if ($res['flag'] === -1) {
        echo $this->myecho(-6, '帐号未登录', '');
      } else if ($res['flag'] === -2) {
        echo $this->myecho(-8, '信息修改失败', '');
      } else {
        echo $this->myecho(100, '信息修改成功', '');
      }
    }
    /**
     * 社团获取关注数和点赞数
     */
    public function getfocusnum() {
      $res = $this->league->getfocusnum();
      if ($res['flag'] === -1) {
        echo $this->myecho(-6, "账号未登录", "");
        return;
      } else if ($res['flag'] === 1) {
        echo $this->myecho(100, "", $res['data']);
      }
    }
  }

?>