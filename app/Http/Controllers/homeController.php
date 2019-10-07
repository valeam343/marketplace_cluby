<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //

	public function show(){
		try {
			$categorias = \App\categoria::all();
			$client = new \GuzzleHttp\Client();
			$request = $client->get('http://192.168.1.98:8000/actividades');
			$response = $request->getBody();
			$content = $response->getContents();

			$arr = json_decode($content, TRUE);
			//echo json_encode($categorias);
			//$res = str_replace("\\", "", $response);
			
			return view('welcome', compact('arr'));
		} catch (Exception $e) {
			echo "Exception: ".$e->getMessage();
		}
		
	}

	public function filtrar2(Request $request){
		$search = $request->get('term');

		$result = \App\actividad::where('nombre', 'LIKE', '%'. $search. '%')->get();

		return response()->json($result);
	}

	public function filtrar(Request $request){
		try {
			if ($request->ajax()) {
    			# code...

				$output = "";

				$actividades = DB::table('actividades')->where('nombre','LIKE', '%'.$request->search."%")->get();

				if ($actividades) {
    			# code...


					foreach ($actividades as $key => $actividad) {
    			# code...
						$output .= '<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="card">
						<img src="#" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">'.$actividad->nombre.'</h5>
						<p class="card-text">'.$actividad->descripcion.'</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
						</div>
						</div>';
					}

					return Response($output);
				}
			}
		} catch (Exception $e) {

			return response()->json(['error'=> 'ERRORS: '.$e->getMessage()]);
		}
	}


}
