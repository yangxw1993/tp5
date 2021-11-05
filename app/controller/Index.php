<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;
use think\captcha\facade\Captcha;
class Index extends BaseController
{
    public function index()
    {
//        return 'this is controller index';
      return View::fetch();
    }
    public function captcha(){
      return Captcha::create();
    }
    public function say_name(){
      View::assign('name', 'PHP');
      View::assign([
        'name'  => 'ThinkPHP',
        'email' => 'thinkphp@qq.com',
        'captcha' => $this->captcha()
      ]);
      return View::fetch();
    }
}
