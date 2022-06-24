<?php

namespace App\Http\Middleware;
use Closure;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * 如果登录的账号是管理员账号,则进入后台首页,否则,进入到前端页面
     */
    public function handle($request, Closure $next)
    {
        $username = $request -> user() ->name;
//        dd($username);
//       $user = $request->user();
//       dd($user);
//        if ($username == 'admin')

        if ($username == '超级管理员'){
            return $next($request);
        }else{
            return redirect("/home/index");
        }

        return $next($request);
    }
}
