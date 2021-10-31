<?php


namespace app\controller;

use app\BaseController;
use think\facade\Db;

class TestMysql extends BaseController
{
  public function index(){
    $select = Db::table('user') ->where('id', 1)->select();
    dump($select);
  }
}