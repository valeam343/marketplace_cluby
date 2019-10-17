<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class actividadController extends Controller
{
    //

    public function show($id){

    	$client = new \GuzzleHttp\Client();
        $request = $client->get('https://apicluby.azurewebsites.net/actividades/'.$id);
        $response = $request->getBody();
        $content = $response->getContents();
        $act = json_decode($content, TRUE);
        return view('actividad')->with(['act' => $act]);
    }


}
