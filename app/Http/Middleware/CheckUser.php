<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Closure;
use App\User;

class CheckUser
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
      $id = Auth::id();
      $check_user = User::where('id', '=', $id)->first();

      if($check_user->user_type == 'user'){
        return $next($request);
      }else{
        Auth::guard()->logout();
        Session::flush();
        return redirect('/');
      }
    }
}
