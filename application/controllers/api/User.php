<?php

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'user');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }
    public function index()
    {
       echo 'api/User';
    }
    /**
     * use to make a info
     *
     * @param int $Flag - the flag
     * @param string $Content -the content
     * @param string $Extra -the extra info
     * @return array
     */
    private function getInfo($flag = 100, $content = '', $extra = ''){
      $info = array('flag' => $flag, 'content' => $content, 'extra' => $extra);
      return $info;
    }
    private function myecho($flag=100, $content='', $extra='') {
      return urldecode(json_encode($this->getInfo($flag, $content, $extra)));
    }
    /**
     * 检查username是否重复
     */
    public function checkname() {
      $username = $this->input->post('username');
      if (!isset($username)) {
        echo $this->myecho(-1, '缺少参数', '');
      }
      $res = $this->user->checkname($username);
      if ($res['flag'] === -1) {
        echo $this->myecho(-9, '用户名已存在', '');
      } else {
        echo $this->myecho(100, '用户名未被使用', '');
      }
    }
    /**
     * 注册
     * @param username 用户名
     * @param password 用户设定的密码
     * @param email 用户注册用的邮箱
     * @return -1缺少参数 -2账号已存在 -3注册失败 -9 用户名已存在 100注册成功
     */
    public function signup() {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $email = $this->input->post('email');
      // 检查是否缺少参数
      if (!isset($username) || !isset($password) || !isset($email)) {
        echo $this->myecho(-1, '缺少参数', '');
        return;
      }
      $res = $this->user->signup($username, $password, $email);
      if ($res['flag'] === -1) {
        echo $this->myecho(-2, '帐号已存在', '');
      } else if ($res['flag'] === -2) {
        echo $this->myecho(-3, '注册失败', '');
      } else if ($res['flag'] === -3) {
        echo $this->myecho(-9, '用户名已存在', '');
      } else {
        echo $this->myecho(100, '注册成功', '');
      }
    }
    /**
     * 登录(社团也可用)
     * @param account 登录账号(可以是邮箱或者用户名)
     * @param password 密码
     * @return -1缺少参数 -4账号不存在 -5密码错误 100登录成功
     */
    public function signin() {
      // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!这里应该要根据帐号类型返回不同状态码给前端
      $account = $this->input->post('account');
      $password = $this->input->post('password');
      // 检查是否缺少参数
      if (!isset($account) || !isset($password)) {
        echo $this->myecho(-1, '缺少参数', '');
        return;
      }
      $res = $this->user->signin($account, $password);
      if ($res['flag'] === -1) {
        echo $this->myecho(-4, '帐号不存在', '');
      } else if ($res['flag'] === -2) {
        echo $this->myecho(-5, '密码错误', '');
      } else {
        echo $this->myecho(100, '登录成功', $res['account_type']); // type表示账号类型，0表示普通用户，1表示社团用户，2表示管理员
      }
    }
    /**
     * 登出(社团也可用)
     */
    public function signout() {
      // 可能还需要设置用户状态
      $res = $this->user->signout();
      if ($res['flag'] === -1) {
        echo $this->myecho(-6, '用户未登录', '');
      } else {
        echo $this->myecho(100, '登出成功', '');
      }
    }
    /**
     * 获取用户信息(社团也可用)
     */
    public function userinfo() {
      $res = $this->user->userinfo();
      if ($res['flag'] === -1) {
        echo $this->myecho(-6, '尚未登录', '');
      } else if ($res['flag'] === -2) {
        echo $this->myecho(-7, '信息获取失败', '');
      } else if ($res['flag'] === 1) {
        echo $this->myecho(100, '信息获取成功', $res['data']);
      }
    }
    /**
     * 修改用户信息
     */
    public function modifyinfo() {
      $new_nick = $this->input->post('new_nick');
      $new_portrait = $this->input->post('new_portrait');
      if (!isset($new_nick) || !isset($new_portrait)) {
        echo $this->myecho(-1, '缺少参数', '');
        return;
      }
      $res = $this->user->modifyinfo($new_nick, $new_portrait);
      if ($res['flag'] === -1) {
        // 未登录
        echo $this->myecho(-6, '用户未登录', '');
      } else if ($res['flag'] === -2) {
        echo $this->myecho(-7, '信息修改失败', '');
      } else {
        echo $this->myecho(100, '信息修改成功', '');
      }
    }
    /**
     * 用户关注社团
     */
    public function addattention() {
      $lid = $this->input->post('lid');
      if (!isset($lid)) {
        echo $this->myecho(-1, '缺少参数', '');
        return;
      }
      $res = $this->user->addattention($lid);
      if ($res['flag'] === -1) {
        // 用户未登录
        echo $this->myecho(-6, '用户未登录', '');
      } else if ($res['flag'] === -2) {
        // 不存在该社团
        echo $this->myecho(-10, '社团不存在', '');
      } else if ($res['flag'] === -3) {
        // 用户已经关注社团
        echo $this->myecho(-11, '用户已经关注社团', '');
      } else if ($res['flag'] === -4) {
        // 关注失败
        echo $this->myecho(-12, '用户关注社团失败', '');
      } else {
        echo $this->myecho(100, '关注成功', '');
      }
    }
    /**
     * 用户取消关注社团
     */
    public function cancelattention() {
      $lid = $this->input->post('lid');
      if (!isset($lid)) {
        echo $this->myecho(-1, '缺少参数', '');
        return;
      }
      $res = $this->user->cancelattention($lid);
      if ($res['flag'] === -1) {
        // 用户未登录
        echo $this->myecho(-6, '用户未登录', '');
      } else if ($res['flag'] === -2) {
        // 不存在该社团
        echo $this->myecho(-10, '社团不存在', '');
      } else if ($res['flag'] === -3) {
        // 用户没有关注该社团
        echo $this->myecho(-13, '用户没有关注该社团', '');
      } else if ($res['flag'] === -4) {
        // 取消关注失败
        echo $this->myecho(-14, '用户取消关注社团失败', '');
      } else {
        echo $this->myecho(100, '取消关注成功', '');
      }
    }
    /**
     * 用户修改密码(user league通用)
     */
    public function modifypass() {
      $old_pass = $this->input->post('old_pass');
      $new_pass = $this->input->post('new_pass');
      if (!isset($old_pass) || !isset($new_pass)) {
        echo $this->myecho(-1, '缺少参数', '');
        return;
      }
      $res = $this->user->modifypass($old_pass, $new_pass);
      if ($res['flag'] === -1) {
        echo $this->myecho(-6, '帐号未登录', '');
      } else if ($res['flag'] === -2) {
        echo $this->myecho(-4, '帐号不存在', '');
      } else if ($res['flag'] === -3) {
        echo $this->myecho(-16, '旧密码错误', '');
      } else if ($res['flag'] === -4) {
        echo $this->myecho(-17, '密码修改失败', '');
      } else {
        echo $this->myecho(100, '密码修改成功', '');
      }
    }
  }

?>