<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Redirect;
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
