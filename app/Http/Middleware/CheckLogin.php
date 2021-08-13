<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->exists('id')) {
            return $next($request);
        } else {
            return Redirect::route("login")->with('error', [
                "message" => 'Vui lòng đăng nhâp !',

            ]); ////
        }
    }
}
