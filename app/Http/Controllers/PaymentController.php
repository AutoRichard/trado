<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Unicodeveloper\Paystack\Paystack;


use App\Account;
use App\Investment;
use App\Plantation;
use App\Subscription;
use App\Transaction;
use App\User;

class PaymentController extends Controller
{
    public $paystack;

    /**
     * Create a new controller instance.     
     *
     * @return void
     */
    public function __construct()
    {
        $this->paystack = new Paystack();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.pay');
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        $plantation_id = json_decode($request->input('metadata'));
        $user_id = Auth::id();

        $plant_id = $plantation_id->{'plantation_id'};

        $check = Investment::where('user_id', '=', $user_id)->where('plantation_id', '=', $plant_id)->get();

        if (count($check) > 0) {
            return redirect('/dashboard')->with('status', 'You already invested on this plantation');
        } else {
            return $this->paystack->getAuthorizationUrl()->redirectNow();
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = $this->paystack->getPaymentData();

        //dd($paymentDetails);

        $status = $paymentDetails['status'];

        if ($status) {

            $message = $paymentDetails['message'];
            $data = $paymentDetails['data'];

            $paystack_transaction_id = $data['id'];
            $transaction_status = $data['status'];

            $transaction_status_reference = $data['reference'];
            $amount = $data['amount'];
            $meta_data = $data['metadata'];


            $user_id = $meta_data['user_id'];
            $unit = $meta_data['unit'];
            $plantation_id = $meta_data['plantation_id'];

            $check_transaction = Transaction::where('user_id', '=', Auth::id())
                ->where('paystack_transaction_reference', '=', $transaction_status_reference)
                ->where('paystack_transaction_id', '=', $paystack_transaction_id)->get();

            if (count($check_transaction) == 0) {

                $plantation = Plantation::where('id', '=', $plantation_id)->first();

                $plantation_percentage = $plantation->percentage;

                $plantation_return = $plantation_percentage / 100;

                $roi = $plantation_return * $amount;

                $return = $amount + $roi;

                $plantation_unti_update = Plantation::where('id', '=', $plantation_id)->update([
                    'r_unit' => $plantation->r_unit - $unit
                ]);

                $investment = new Investment;
                $investment->user_id = $user_id;
                $investment->unit = $unit;
                $investment->plantation_id = $plantation_id;
                $investment->status = 'active';
                $investment->amount = $amount;
                $investment->paystack_transaction_id = $paystack_transaction_id;
                $investment->return = $return;
                $save = $investment->save();

                if ($save) {
                    $transaction = new Transaction;
                    $transaction->paystack_transaction_id = $paystack_transaction_id;
                    $transaction->paystack_transaction_reference = $transaction_status_reference;
                    $transaction->user_id = Auth::id();
                    $transaction->type = 'invest';
                    $transaction->amount = $amount;
                    $transaction->status = $transaction_status;
                    $transaction->save();

                    $balance = Account::where('user_id', '=', Auth::id())->first();
                    $balance_ = $balance->investment;

                    $amount_balance = $balance_ + $amount;

                    $update_balance = Account::where('user_id', '=', Auth::id())->update([
                        'investment' => $amount_balance
                    ]);

                    $admin_id = User::where('user_type', '=', 'admin')->first();

                    $balance1 = Account::where('user_id', '=', $admin_id->id)->first();
                    $balance1_ = $balance1->investment;

                    $amount_balance1 = $balance1_ + $amount;

                    $update_balance1 = Account::where('user_id', '=', $admin_id->id)->update([
                        'investment' => $amount_balance1
                    ]);

                    return redirect('/dashboard');
                }
            }else{
                return redirect('/dashboard'); 
            }


            //$message . ' ' . $paystack_transaction_id . ' ' . $transaction_status . ' ' . $transaction_status_reference . ' ' . $amount . ' ' . $user_id . ' ' . $unit;
        } else {
            return redirect('/dashboard');
        }



        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
