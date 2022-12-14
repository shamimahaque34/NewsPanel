<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;


class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // 
        
        if(Auth::check())
           {
               
            if(Auth()->user()->id == 1 )
            {
                 return $next($request);
            }
    
            else
            {
                return redirect('/')->with('success','access denied');
            }

          }

          else
          {
            return redirect('login')->with('success','please log in');
          }
    }
}
