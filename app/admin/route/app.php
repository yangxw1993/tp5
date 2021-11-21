<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('think', function () {
    return 'hello,ThinkPHP6!';
});
Route::get('login', '/Login/index');
Route::resource('user', 'User');
Route::group('goods', function (){
  Route::get('list','queryGoods');
  Route::post('add','addGoods');
  Route::post('edit','editGoods');
  Route::delete('remove','removeGoods');
})->completeMatch()->prefix('goods/');
