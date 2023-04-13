<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class CekOngkirController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = "https://api.rajaongkir.com/starter/city";
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

    public function tarifongkir(Request $request)
    {
        $client = new Client();
        $url = "https://api.rajaongkir.com/starter/city";
        $headers = [
            'key' => '695fd2e1535a3750238404ee731b0ebd'
        ];
        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());

        $weight = $request->weight * 1000;
        $weightOri = $request->weight;
        $origin = $request->origin;
        $destination = $request->destination;
        $responseBody2 = $this->cekongkir($origin, $destination, $weight);
        return view('ongkir.tarif', compact('responseBody','responseBody2','weightOri','origin','destination'));
    }

    public function cekongkir($origin, $destination, $weight)
    {
        $client = new Client();
        $url = "https://api.rajaongkir.com/starter/cost";
        $courier = array("jne", "pos", "tiki");

        $headers = [
            'key' => '695fd2e1535a3750238404ee731b0ebd'
        ];

        for ($i=0; $i < count($courier); $i++) {
            $params = [
                "origin"=> $origin,
                "destination"=> $destination,
                "weight"=> $weight,
                "courier"=> $courier[$i]
            ];
    
            $response = $client->request('POST', $url, [
                'form_params' => $params,
                'headers' => $headers,
                'verify'  => false,
            ]);
            $responseBody[] = json_decode($response->getBody());
        }
        return $responseBody;
    }
    //Last Line
}
