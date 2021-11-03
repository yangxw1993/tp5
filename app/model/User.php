<?php


namespace app\model;
use think\Model;

class User extends Model
{
  public function getUser(){
    $find = User::find(2);
    return $find->toArray();
//    $find = User::where('id', 2)->find();
//    return $find;
  }
}