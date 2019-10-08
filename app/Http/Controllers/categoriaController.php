<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class categoriaController extends Controller
{
    //

    public function show($id){
    	try {
    			$client = new \GuzzleHttp\Client();
    		    $request = $client->get('http://192.168.1.137:8000/actividades/'.$id);
    		    $response = $request->getBody();
    		    $content = $response->getContents();
    		    $cat = json_decode($content, TRUE);
    		    $act = \App\actividad::where('idCategoria', $id)
    		    ->orderBy('nombre', 'desc')
    		    ->get();
    			//return response()->json($actividad);
    		    return view('categoria')->with(['cat' => $cat])->with(['act' => $act]);
    	} catch (Exception $e) {
    		echo "Exception: ".$e->getMessage();
    	}
    }
}
