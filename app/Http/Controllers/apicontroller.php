<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class apicontroller extends Controller
{
    public function getData(){
        $client = new Client();
        $response = $client->get('https://api.agify.io?name=chua');

        return  $response; 
    }
}

?>