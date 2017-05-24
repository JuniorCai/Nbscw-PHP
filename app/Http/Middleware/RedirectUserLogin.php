<?php
/**
 * Created by PhpStorm.
 * User: 钧球
 * Date: 2017-05-24
 * Time: 13:43
 */
namespace App\Http\Middleware;

use Closure;

class RedirectUserLogin
{
    /**
     * 用于登录页检查用户是否已登录
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request,Closure $next)
    {
//        if(auth()->guard('admin')->check())
//        {
//
//            return redirect('/admin');
//        }

        if(auth()->guard('user')->check())
        {
            return redirect('/');
        }

        return $next($request);
    }
}
