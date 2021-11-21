<?php


namespace app\admin\controller;
use think\Request;
use think\facade\Db;


class User
{
  // admin/user/login
  public function login(Request $request){
    if($request -> isPost()){
      $username = $request->param('username', '', 'trim');
      $password = $request->param('password', '', 'trim');
      if(!$username || !$password){
        return json([
          "code" => 1,
          "msg" => '请输入用户名或密码',
        ]);
      }
      $user = Db::table('admin')->where('username', $username)->find();
      if(!$user){
        return json([
          "code" => 1,
          "msg" => '用户名不存在，请联系管理员',
        ]);
      }
      if($user['password'] != md5($password)){
        return json([
          "code" => 1,
          "msg" => '用户名或密码错误',
        ]);
      }
      return json([
        "code" => 0,
        "msg" => 'OK',
        'data' => [
          $user,
          'token' => $username
        ]
      ]);
    }
  }
//  获取用户信息
  public function info(Request $request){
    $header = $request->header();
    $username = $header['token'];
    if(!isset($username)){
      return json(['code'=> 401, 'msg'=>'未授权']);
    }
    $user = Db::table('admin')->where('username', $username)->find();
    if(!$user){
      return json([
        "code" => 1,
        "msg" => '用户名不存在，请联系管理员',
      ]);
    }
    $user['roles'] = [$username];
    return json([
      "code" => 0,
      "msg" => 'ok',
      'data' => $user
    ]);
  }
  public function logout(){
    return json([
      "code" => 0,
      "msg" => 'OK',
      'data' => null
    ]);
  }
}