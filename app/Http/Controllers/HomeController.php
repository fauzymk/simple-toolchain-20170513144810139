<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index() {

    	$client = new Client(['base_uri' => 'https://locus-kota.mybluemix.net/']);

	    $response = $client->request('GET', '/api/cities');
	    $cities = json_decode($response->getBody()); 

    	return view('index')->with('data', $cities);
    }
}
