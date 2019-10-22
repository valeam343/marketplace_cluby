<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class actividadController extends Controller
{
    //

    public function show($id){

    	try {
    			$client = new \GuzzleHttp\Client();
    		    $request = $client->get('https://apicluby.azurewebsites.net/actividades/'.$id);
    		    $requestGrupos = $client->get('https://apicluby.azurewebsites.net/gruposPorActividad/'.$id);
    		    $response = $request->getBody();
    		    $responseGrupos = $requestGrupos->getBody();
    		    $contentGrupos = $responseGrupos->getContents();
    		    $content = $response->getContents();
    		    $act = json_decode($content, TRUE);
    		    $grp = json_decode($contentGrupos, TRUE);
    		    return view('actividad', compact('act', 'grp'));
    	} catch (Exception $e) {
    		echo "Exception: ".$e->getMessage();
    	}
    }

    public function show(){
        try {
            
            $client = new \GuzzleHttp\Client();
            $request = $client->get('https://apicluby.azurewebsites.net/actividades/');
            $requestCategoria = $client->get('https://apicluby.azurewebsites.net/categorias/');
            $response = $request->getBody();
            $content = $response->getContents();
            $responseCategoria = $requestCategoria->getBody();
            $contentCategoria = $responseCategoria->getContents();
            $arr = json_decode($content, TRUE);
            $arrCategoria = json_decode($contentCategoria, TRUE);
            return view('welcome', compact('arr', 'arrCategoria'));
        } catch (Exception $e) {
            echo "Exception: ".$e->getMessage();
        }
        
    }
    public function filtrar(Request $request){
        try {
            $search = $request->get('term');
            $client = new \GuzzleHttp\Client();
            $request = $client->get('https://apicluby.azurewebsites.net/filtrar/second/'.$search);
            $response = $request->getBody();
            $content = $response->getContents();
            $result = json_decode($content);
            return response()->json($result);
        } catch (Exception $e) {
            
        }
    }

    public function filtrar2(Request $request){
        $search = $request->get('term');
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://apicluby.azurewebsites.net/filtrar/first/'.$search);
        $response = $request->getBody();
        $content = $response->getContents();
        $result = json_decode($content);
        ///$result = \App\actividad::where('nombre', 'LIKE', '%'. $search. '%')->get();

        return response()->json($result);
    }


}
