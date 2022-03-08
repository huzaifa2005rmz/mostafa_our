<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMsg;
use Illuminate\Support\Facades\Mail;


class CheckoutController extends Controller
{
    public $price;
    public function checkout(Request $request)
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51KZVDtJZ0be0eOz5yxQc46N3sjoy4U9FIHcxp154tJoMHAXzCDsjjazd3B1GZAaU7SOAJAAT2wOtrakHbMqJgw9B00TD9B57B3');
        		
		


        $title = $request->input("price_ch");
        $dsa = $request->input("price_ch");
        $price = $request->input("price_ch");

       $amount = 100;
		$amount *= $price;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'USD',
			'description' => ' تم استلام مبلغ '. $price .'من بيع الخدمة ' . $title ,
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('checkout.credit-card',compact('intent'))->with("price", $price);

    }

    public function afterPayment(Request $request)
    {
        $data = [
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "phone" => $request->input("phone"),
            "addres" => $request->input("addres")
        ];
        Mail::to("huzaifa2005rmz@gmail.com")->send(new SendMsg($data));
        return "<h1>تمت عملية الشراء </h1>
        <h1><a href='/' >تم</a></h1>
        ";
        
       
    }
}