<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use App\Investment;
use App\Account;
use App\User;
use App\Plantation;

class UpdateBalance
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
        if (Auth::guard($guard)->check()) {
            $check_balance = Investment::where('user_id', '=', Auth::id())->get();

            foreach ($check_balance as $check) {
                if ($check->status == 'active') {
                    
                    $plantation_check = Plantation::where('id', '=', $check->plantation_id)->first();
                    
                    $month = $plantation_check->duration;
                    
                    $now = \Carbon\Carbon::now();
                    $plant_duration = $check->created_at;

                    $dif = $plant_duration->diffInMonths($now);

                    if($dif == 0){
                        $percentage_ = 0;
                    }else{
                        $percentage_ = ($dif / $month) * 100;
                    }                    

                    if($percentage_ >= 100){
                        $invest_update = Account::where('user_id', '=', Auth::id())->first();
                        $balance_ = $invest_update->balance;
                        $invest_ = $invest_update->investment;

                        $new_balance = $balance_ + $check->return;
                        $new_invest = $invest_ - $check->amount;

                        $invest_update_user = Account::where('user_id', '=', Auth::id())->update([
                            'balance' => $new_balance,
                            'investment' => $new_invest
                        ]);

                        $active_update = Investment::where('user_id', '=', Auth::id())->update([
                            'status' => 'done'
                        ]);

                        $admin = User::where('user_type', '=', 'admin')->first();

                        $invest_update1 = Account::where('user_id', '=', $admin->id)->first();
                        $balance1_ = $invest_update1->balance;
                        $invest1_ = $invest_update1->investment;

                        $new_balance1 = $balance1_ + $check->return;
                        $new_invest1 = $invest1_ - $check->amount;

                        $invest_update_user = Account::where('user_id', '=', Auth::id())->update([
                            'balance' => $new_balance1,
                            'investment' => $new_invest1
                        ]);                        
                    }
                }
            }
        }
        return $next($request);
    }
}
