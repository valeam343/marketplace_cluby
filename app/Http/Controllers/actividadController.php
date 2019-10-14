<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class actividadController extends Controller
{
    //

    public function show($nombre){

    	$client = new \GuzzleHttp\Client();
        $request = $client->get('http://192.168.1.73:8000/actividades/'.$nombre);
        $response = $request->getBody();
        $content = $response->getContents();
        $act = json_decode($content, TRUE);
        return view('actividad')->with(['act' => $act]);
    }


}
