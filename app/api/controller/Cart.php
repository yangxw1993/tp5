<?php


namespace app\api\controller;


class Cart
{
  // GET
  public function index(){
    return 'cart List';
  }
  // GET blog/:id api/cart/123
  public function read($id)  {
    return 'Cart Read'.$id;
  }
  // GET api/cart/creat
  public function create($id)  {
    return 'Cart create';
  }
  // POST  api/cart
  public function save()  {
    return 'Cart Save';
  }
  // PUT blog/:id api/cart/123
  public function update($id)  {
    return json(['msg' => 'Cart Update_'.$id]);
  }
  public function delete($id)  {
    return  json(['msg' => 'Cart Delete_'.$id]);
  }
}