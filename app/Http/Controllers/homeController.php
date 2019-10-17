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

	public function filtrar2(Request $request){
		$search = $request->get('term');

		$result = \App\actividad::where('nombre', 'LIKE', '%'. $search. '%')->get();

		return response()->json($result);
	}
	
	/*
	public function filtrar(Request $request){
		try {
			if ($request->ajax()) {
    			# code...

				$output = array();

				$actividades = DB::table('actividades')->where('nombre','LIKE', '%'.$request->search."%")->get();

				if ($actividades) {
    			# code...


					foreach ($actividades as $key => $actividad) {
    			# code...
						$outputs = '<div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-stretch" style="margin-top: 10px; margin-bottom: 10px;">
						<div class="card">
						<a href =":url">
						<img src="'.$actividad->imagen.'" style="height: 200px;" class="responsive">
						</a>
						<div class="card-body">
						<h5 class="card-title">'.$actividad->nombre.'</h5>
						<p class="card-text">'.$actividad->descripcion.'</p>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<center><a href="#" class="btn btn-primary">Go somewhere</a></center>
						</div>
						</div>
						</div>';
						array_push($output, $outputs);

					}

					return response($output);
				}
			}
		} catch (Exception $e) {

			return response()->json(['error'=> 'ERRORS: '.$e->getMessage()]);
		}
	}
*/

}
