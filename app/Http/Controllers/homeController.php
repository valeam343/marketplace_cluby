<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Helper;

class homeController extends Controller
{
    //

	public function show(){
		try {
			
			$client = new \GuzzleHttp\Client();
						$request = $client->get('https://apicluby.azurewebsites.net/actividades/');
						$requestCategoria = $client->get('https://apicluby.azurewebsites.net/categorias/');
						$requestCiudad = $client->get('https://apicluby.azurewebsites.net/ciudades');
						$responseCiudad = $requestCiudad->getBody();
						$response = $request->getBody();
						$content = $response->getContents();
						$contentCiudad = $responseCiudad->getContents();
						$responseCategoria = $requestCategoria->getBody();
						$contentCategoria = $responseCategoria->getContents();
						$arr = json_decode($content, TRUE);
						$arrCategoria = json_decode($contentCategoria, TRUE);
						$arrCiudad = json_decode($contentCiudad, TRUE);
						return view('welcome', compact('arr', 'arrCategoria', 'arrCiudad'));
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
	
	public function buscar(Request $request){
		$search = $request->term;
		$search = $request->get('term');
		$client = new \GuzzleHttp\Client();
		$request = $client->get('https://apicluby.azurewebsites.net/filtrar/first/'.$search);
		$response = $request->getBody();
		$content = $response->getContents();
		$result = json_decode($content);
		 foreach($result as $post)
		            {
		                
		                $new_row['title']= $post->nomActividad;
			            $new_row['image']= $post->rutaimagen;
		                $new_row['url']= url('actividad/'.$post->nomActividad);
		                
		                $row_set[] = $new_row; //build an array
		            }

		    echo json_encode($row_set); 
	}

}
