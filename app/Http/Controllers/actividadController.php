<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class actividadController extends Controller
{
    //
    public function show($id){
<<<<<<< HEAD
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
=======

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
>>>>>>> b1ad1490577eadc103c98e2213ab95f7082ec78a


}
