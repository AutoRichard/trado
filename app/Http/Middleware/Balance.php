<?php

namespace App\Http\Middleware;


use Illuminate\Support\Facades\Auth;
use Closure;
use App\Account;

class Balance
{ 
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->check()){
            $check_balance = Account::where('user_id', '=', Auth::id())->get();

            if(count($check_balance) == 0){
                $balance = new Account;
                $balance->user_id = Auth::id();
                $balance->balance = 0;
                $balance->investment = 0;
                $balance->save();
            }
        }
        return $next($request);
    }
}
