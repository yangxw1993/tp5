<?php


namespace app\controller;
use think\facade\View;


class Goods
{
//  index.php/Goods/index
  public function index(){
    View::assign('list', [
      [
        'id' => 1,
        'name' => 'HTML',
        'price' => 100,
      ],
      [
        'id' => 2,
        'name' => 'CSS',
        'price' => 200,
      ],
      [
        'id' => 3,
        'name' => 'PHP',
        'price' => 300,
      ]
    ]);
    return View::fetch();
  }
}