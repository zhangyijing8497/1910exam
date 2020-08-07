<?php

namespace App\Http\Middleware;

use Closure;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $u = session('user_name');
        if(empty($u)){
            echo "请先登录";
            header("refresh:3;url=/login");die;
        }
        return $next($request);
    }
}
