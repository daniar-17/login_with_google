<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class CekOngkirController extends Controller
{
    public function index()
    {
        return view('ongkir.index');
    }

    public function cekongkir()
    {
        $client = new Client();
        $url = "https://api.rajaongkir.com/starter/cost";

        $params = [
            "origin"=> "501",
            "destination"=> "114",
            "weight"=> 1700,
            "courier"=> "jne"
        ];

        $headers = [
            'key' => '695fd2e1535a3750238404ee731b0ebd'
        ];

        $response = $client->request('POST', $url, [
            'form_params' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());
        dd($responseBody);
    }
    //Last Line
}
