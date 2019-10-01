<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //

    public function show(){

    	$categorias = \App\categoria::all();
    	return view('welcome', compact('categorias'));
    }


}
