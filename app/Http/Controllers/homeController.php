<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //

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
	public function index($arr, $con){

    return view('categoria')->with(['arrCategoria' => $arr])->with(['categoria' =>$con]);
  }
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
        $actividad = $request->input('search');
        $ciudad = $request->input('searchCiudad');
        $client = new \GuzzleHttp\Client();
        if($actividad != ''){
          $request = $client->get('https://apicluby.azurewebsites.net/filtrar/first/'.$actividad);
        }else{
          $request = $client->get('https://apicluby.azurewebsites.net/filtrar/second/'.$ciudad);
        }
        $response = $request->getBody();
        $content = $response->getContents();
        $arrCategoria = json_decode($content, TRUE);
         return view('categoria')->with(['arrCategoria' => $arrCategoria])->with(['categoria' => ' ']);
      } catch (Exception $e) {
        echo "Exception: ".$e->getMessage();
      }
    }

}
