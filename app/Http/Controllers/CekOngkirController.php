<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class CekOngkirController extends Controller
{
    public function index()
    {
        $users = User::all();
        $client = new Client();
        $url = "https://api.rajaongkir.com/starter/city";
        $params = [
        ];
        $headers = [
            'key' => '695fd2e1535a3750238404ee731b0ebd'
        ];
        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        return view('ongkir.index', compact('responseBody'));
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

        $params2 = [
            "origin"=> "501",
            "destination"=> "114",
            "weight"=> 1700,
            "courier"=> "pos"
        ];

        $headers = [
            'key' => '695fd2e1535a3750238404ee731b0ebd'
        ];

        $response = $client->request('POST', $url, [
            'form_params' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $response2 = $client->request('POST', $url, [
            'form_params' => $params2,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $responseBody[] = json_decode($response->getBody());
        $responseBody[] = json_decode($response2->getBody());
        dd($responseBody);
    }
    //Last Line
}
