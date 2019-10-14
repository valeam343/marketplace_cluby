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
         $request = $client->get('http://192.168.1.73:8000/actividades/'.$id);
         $response = $request->getBody();
         $content = $response->getContents();
         $cat = json_decode($content, TRUE);
         $requestAct = $client->get('http://192.168.1.73:8000/categoria/'.$id);
         $responseAct = $requestAct->getBody();
         $contentAct = $responseAct->getContents();
         $act = json_decode($contentAct, TRUE);
    			//return response()->json($actividad);
         return view('categoria')->with(['cat' => $cat])->with(['act' => $act]);
     } catch (Exception $e) {
      echo "Exception: ".$e->getMessage();
  }
}
}
