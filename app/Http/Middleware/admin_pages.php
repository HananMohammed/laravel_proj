<?php

namespace App\Http\Middleware;

use Closure;

class admin_pages
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
          $email=$request->session()->get('s_email');
          $data="hanan@hanan.com";
          if($email !=$data){
              return redirect('/');
          }
        return $next($request);
    }
}
