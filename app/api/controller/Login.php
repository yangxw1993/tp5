<?php


namespace app\api\controller;
use \think\facade\Db;

class Login
{
  public function getUsers(){
    $item = Db::table('user') -> where('id', 2)-> select();
    return json($item);
  }
}