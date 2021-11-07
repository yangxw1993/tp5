<?php
declare (strict_types = 1);

namespace app\middleware;

use think\response\Json;

class Check
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
      $header = $request->header();
      if(!isset($header['token'])){
        return json(['code'=> 401, 'msg'=>'未授权']);
      }
      return $next($request);

    }
}
