<?php

namespace App\Http\Controllers;

use Paystack;

use App\Http\Requests;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        $user = auth()->user();
        $payment = new payment();

        $payment->user_id=$user->id;
        $payment->amount=$paymentDetails['data']['amount'];
        $payment->status=$paymentDetails['data']['status'];
        $payment->channel=$paymentDetails['data']['channel'];
        $payment->trans_id=$paymentDetails['data']['id'];
        $payment->ref_id=$paymentDetails['data']['reference'];

        if($payment->save())
        {
            $wallent = $user->wallent_amount + $paymentDetails['data']['amount'];
            DB::table('users')
            ->where('id', $payment->user_id)
             ->update(['wallent_amount' => $wallent]);
            return view('home')->with('mesaage', "Transaction Successful");
        }
        return view('form')->with('mesaage', "Transaction Failed");

    }
}
