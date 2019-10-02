<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //

	public function show(){

		$categorias = \App\categoria::all();
		return view('welcome', compact('categorias'));
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
