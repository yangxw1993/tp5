<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;
class Index extends BaseController
{
    public function index()
    {
//        return 'this is controller index';
      return View::fetch();
    }
    public function say_name(){
      return View::fetch();
    }
}
