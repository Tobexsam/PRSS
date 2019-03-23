<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
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


//        if (session()->get('role')== null) {
//
//            session()->flash('message','You must log in first');
//            session()->flash('alert','danger');
//            return view('login', compact('error', 'alert'));
//        }




        return $next($request);
    }
}
