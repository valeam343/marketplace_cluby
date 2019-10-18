<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
class categoriaController extends Controller
{
    //
  public function index($arr, $con){

    return view('categoria')->with(['arrCategoria' => $arr])->with(['categoria' =>$con]);
  }
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
        $request = $client->get('https://apicluby.azurewebsites.net/categ/'.'1');
        $response = $request->getBody();
        $content = $response->getContents();
        $arrCategoria = json_decode($content, TRUE);
            //return redirect('categoria')->with(['arrCategoria' => $arrCategoria])->with(['categoria' =>'none']);
            //return response()->json(['url' => url('categoria')->with(['arrCategoria' => $arrCategoria])->with(['categoria' =>'none'])]);
            //return Redirect::route('categoria')->with(['arrCategoria' => $arrCategoria])->with(['categoria' =>'none']);

           // return redirect()->view('categoria')->with(['arrCategoria' => $arrCategoria])->with(['categoria' =>'none'])->render();
        return redirect()->action(
          'categoriaController@index', ['arr' => $arrCategoria, 'con' => 'none']
        );
      } catch (Exception $e) {
        echo "Exception: ".$e->getMessage();
      }
    }
  }
