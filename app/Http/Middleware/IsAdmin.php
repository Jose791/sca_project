<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;

use Illuminate\Support\Facades\Auth;

use Session;

use Closure;

class IsAdmin
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        if (Auth::check() && Auth::User()->type=='admin'){

            
          
            return $next($request);
         
        
         
        
    }

    
          Session::flash('info', 'Requiere permisos de administrador...');

         return redirect()->back();
}

}