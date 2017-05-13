<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function order() {
    	$time = Carbon::now()->toW3cString();

    	return view('order')->with('date', $time);
    }

    public function orderHistory() {
    	return view('order-history');
    }

    public function postOrder(Request $request) {
    	$client = new Client(['base_uri' => 'http://locus-kota.mybluemix.net']);
    	$response = $client->post('/api/orders', 
    		["json" => [
    			"product_type" => "recurring",
    			"city_name" => "Bogor",
    			"subs_plan" => $request->get('subsplan'),
    			"auto_renewal" => $request->get('autorenew'),
    			"PO_period" => $request->get('poperiod'),
    			"effective_date" => $request->get('effectivedate'),
    			"based_price" => $request->get('price'),
    			"order_notes" => $request->get('notes'),
    			"payment_method" => $request->get('payment'),
    			"bank_name" => $request->get('bank'),
    			"account_number" => $request->get('accno'),
    			"contact_address" => $request->get('contact_adress'),
    			"contact_name" => $request->get('contact_name'),
    			"contact_phone" => $request->get('contact_telp'),
    			"email_alert" => $request->get('alert'),
    			"amount" => 100
    		]]);
    }
}
