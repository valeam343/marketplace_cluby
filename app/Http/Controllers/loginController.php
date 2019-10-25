<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\confiramcion;

class loginController extends Controller
{
    //
	public function agregarUsuario(Request $request){
		try {
			$data['codigo'] = str_random(25);
			$client = new \GuzzleHttp\Client();
			$url 	= 'https://apicluby.azurewebsites.net/usuario';
			$cuerpo = array([
			'usuario' 		=> $rquest->input('sUsuario'),
			'correo' 		=> $request->input('sCorreo'),
			'contrasenia' 	=> $request->input('sContrasenia'),
			'codigo' 		=> $data['codigo']
			]);

		$requestGuzzle = $client->post($url, ['body' => $cuerpo]);
		$response = $request->send();

		$this->sendValidarCorreo($cuerpo);

	} catch (Exception $e) {
		echo "Exception: ".$e->getMessage();
	}
}

public function validarCode($code){
	try {
		$client = new \GuzzleHttp\Client();
		$request = $client->get('https://apicluby.azurewebsites.net/usuario/'.$code);
		$response = $request->getBody();
		$content = $response->getContents();
		$codigo = json_decode($content);
		if(empty($codigo))
			return redirect('/index');

		$requestUpdateCode = $client->get('https://apicluby.azurewebsites.net/user/'.$codigo['pkUsuario']);
		$responseUsuario = $requestUpdateCode->getBody();
		$contentUsuario = $responseUsuario->getContents();
		$status = json_decode($contentUsuario);
		if($status['status'] == 'true')
			return redirect('/');

	} catch (Exception $e) {
		echo "Exception: ".$e->getMessage();
	}
}

public function sendValidarCorreo($cuerpo){
	try {
		$obj = new \stdClass();
		$obj->correo = $cuerpo['correo'];
		$obj->usuario = $cuerpo['usuario'];
		$obj->contrasenia = $cuerpo['contrasenia'];
		$obj->codigo = $cuerpo['codigo'];

		Mail::to($correo)->send(new confiramcion($obj));
	} catch (Exception $e) {
		echo 'Exception: '.$e->getMessage();
	}
}
}
