<?php


namespace app\controller;
use think\facade\Db;
use think\facade\Request;
use think\response\Json;

class User
{
  // index.php/User/getUserList
  public function getUserList(){
    $id = Request::param('id');
    if($id){
      $item = Db::table('user') ->where('id', $id)->find();
      $result = [
        'code'=>0,
        'data'=>$item
      ];
      return Json($result);
    }else{
      return '缺少参数';
    }
  }
}