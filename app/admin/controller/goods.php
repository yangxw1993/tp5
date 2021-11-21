<?php


namespace app\admin\controller;


class goods
{
  public function queryGoods(){
    return json([
      'code'=>0,
      'msg'=>'query'
    ]);
  }
  public function addGoods(){
    return json([
      'code'=>0,
      'msg'=>'add'
    ]);
  }
  public function editGoods(){
    return json([
      'code'=>0,
      'msg'=>'edit'
    ]);
  }
  public function removeGoods(){
    return json([
      'code'=>0,
      'msg'=>'removeGoods'
    ]);
  }
}