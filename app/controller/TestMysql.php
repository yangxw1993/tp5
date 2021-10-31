<?php


namespace app\controller;

use app\BaseController;
use think\facade\Db;

class TestMysql extends BaseController
{
//  http://localhost:7890/index.php/TestMysql/update
  public function index(){
    $select = Db::table('user') ->select();
    dump($select);
  }
  public function find(){
    $find = Db::table('user') ->find(2);
    dump($find);
  }
  public function add(){
    $data = ['name' => 'bar', 'phone' => '13112345678', 'gender' => 1, 'age' => 30, 'city' => '西安' ];
    Db::name('user')->save($data);
  }
  public function update(){
    $data = ['phone' => '13112567898', 'gender' => 2 ];
    $update = Db::table('user')->where('id', 4)-> update($data);
    dump($update);
  }
}