<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Illuminate\Support\Facades\Validator;
class categoriaController extends Controller
{
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
        $rules = [
            'search' => 'required_without_all:estado',
            'estado' => 'required_without_all:search',
        ];
        $customMessages = [
        'required_without_all' => 'Al menos un campo debe ser llenado.',
        ];

        $this->validate($request, $rules, $customMessages);

        $actividad = $request->input('search');
        $ciudad = $request->get('estado');

        
        
        
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://apicluby.azurewebsites.net/busqueda?actividad='.$actividad.'&estado='.$ciudad);
        $response = $request->getBody();
        $content = $response->getContents();
        $arrCategoria = json_decode($content, TRUE);
        //echo print_r($arrCategoria);
        //return back()->with("status", "Your message has been received, We'll get back to you shortly.");
        return view('categoria')->with(['arrCategoria' => $arrCategoria])->with(['categoria' => ' ']);
      } catch (Exception $e) {
        echo "Exception: ".$e->getMessage();
      }
    }
}
