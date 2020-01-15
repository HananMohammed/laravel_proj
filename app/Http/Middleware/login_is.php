<?php

namespace App\Http\Middleware;

use Closure;

//notes
//Closure  confirm that all middlewares working fine in all the site 
class login_is
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
       if(! $request->session()->get('s_email')){
        return redirect('login_supplier');

       }


        return $next($request);
    }
}
