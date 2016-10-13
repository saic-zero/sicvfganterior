<?php

namespace SICVFG\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;

class Administrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     protected $Auth;

    public function __construct(Guard $auth){
        $this->auth =$auth;
    }

    public function handle($request, Closure $next)
    {
      if ($this->auth->user()->tipoCuenta!=1) {
        return redirect('index')->with('mensaje','Sin privilegios');
      }
        return $next($request);
    }
}
