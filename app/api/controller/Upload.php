<?php


namespace app\api\controller;
use \think\facade\Filesystem;
//use \think\api\request;

class Upload
{
  public function index()
  {
    header('Access-Control-Allow-Origin: *');
    // 获取表单上传文件 例如上传了001.jpg
    $file = request()->file('file');
    try {
      validate(['imgFile' => [
        'fileSize' => 4 * 1024* 1024,
        'fileExt' => 'jpg,jpeg,png,bmp,gif',
        'fileMime' => 'image/jpeg,image/png,image/gif', //这个一定要加上，很重要我认为！
      ]])->check(['imgFile' => $file]);
      $saveName = Filesystem::disk('public')->putFile( 'merchant', $file, 'data');
      return json([
        'code' => 0,
        'msg' => '图片上传成功',
        'data' => $saveName
      ]);
    }catch (\Exception $e ){
      return $this->exceptionHandle($e,
        '图片上传失败！'.$e ->getMessage(),
        'json',
        ''
        );
    }
  }
}