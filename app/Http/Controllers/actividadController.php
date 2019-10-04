<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class actividadController extends Controller
{
    //

    public function show($nombre){

    	
    	$actividad = \App\actividad::where('nombre', 'LIKE', '%'.$nombre.'%')->get();
    	//echo "nombre: ". $nombre;
    	$act = json_decode($actividad, TRUE);
    	//echo print_r($act);
    	
    	//return response()->json($actividad);
    	return view('actividad')->with(['act' => $act]);
    }


}
