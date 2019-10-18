<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class categoriaController extends Controller
{
    //

    /*public function show($id){
    	try {
           $client = new \GuzzleHttp\Client();
           $request = $client->get('https://apicluby.azurewebsites.net/actividades/'.$id);
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
  }*/

    public function actividadesPorCategoria($id){
      try {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://apicluby.azurewebsites.net/categ/'.$id);
        $response = $request->getBody();
        $content = $response->getContents();
        $arrCategoria = json_decode($content, TRUE);
        
        return view('categoria')->with(['arrCategoria' => $arrCategoria])->with(['categoria' =>$arrCategoria[0]['nomCategoria']]);

    } catch (Exception $e) {
        echo "Exception:". $e->getMessage();
    }
}

    public function filtroEnInicio(Request $request){
        try {
            $actividad  = $request->input('actividad');
            $ciudad     = $request->input('ciudad');
            $client = new \GuzzleHttp\Client();
            $request = $client->get('https://apicluby.azurewebsites.net/filtrar/first/'.$actividad);
            $response = $request->getBody();
            $content = $response->getContents();
            $arrCategoria = json_decode($content, TRUE);
            return view('categoria')->with(['arrCategoria' => $arrCategoria])->with(['categoria' =>'']);
        } catch (Exception $e) {
            echo "Exception: ".$e->getMessage();
        }
    }
}
