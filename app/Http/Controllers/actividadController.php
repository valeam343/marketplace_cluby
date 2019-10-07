<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class actividadController extends Controller
{
    //

    public function show($nombre){

    	$client = new \GuzzleHttp\Client();
        $request = $client->get('http://192.168.1.98:8000/actividades/'.$nombre);
        $response = $request->getBody();
        $content = $response->getContents();
    	//$actividad = \App\actividad::where('nombre', 'LIKE', '%'.$nombre.'%')->get();
    	//echo "nombre: ". $nombre;
    	$act = json_decode($content, TRUE);
    	//echo print_r($act);
    	
    	//return response()->json($actividad);
    	return view('actividad')->with(['act' => $act]);
    }


}
