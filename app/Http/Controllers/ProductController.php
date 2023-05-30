<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    //
    // funcion que consume la api y me muestra todos los registros
    public function index(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response= Http::get($url.'/producto/all');
        $data=$response->json();
        return view('productos',compact('data')); 
    } 
    
    //esta funcion me permite pasar la vista donde se va a crear el nuevo producto
    public function create(){
        return view('producto');
    }

    //esta funcion consume la api tambien en la ruta que contiene el metodo store y me crea los registros de los productos 
    public function store (Request $request){
        //aqui se pasa el url del api
        $url = env('URL_SERVER_API','http://127.0.0.1');
        //aqui se declara una variable que va a llevar el metodo y la ruta del api
        $response = Http::post($url.'/producto/store',[
                    'descripcion' => $request -> descripcion,
                    'id_categoria' => $request -> id_categoria,
                    'precio' => $request -> precio,
                    'estado' => $request -> estado,
                    'establecimiento_final' => $request -> establecimiento_final,
        ]);
        //aqui donde se almacena los datos creados que se van a enviar en formato json al api 
        $response->json();
        //aqui redireciona a una ruta web creada 
        return redirect()->route('productos.index');
    }

   



    public function delete($id){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response= Http::delete($url.'/producto/delete/'.$id);
        return redirect()->route('productos.index');
    }

    public function view($id){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response= Http::get($url.'/producto/SelectOne/'.$id);
        $data=$response->json();
        return view('productovista',compact('data')); 
    }

    public function update (Request $request ){

        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::put($url.'/producto/update/'.$request->id,[
                    
                    'descripcion' => $request -> descripcion,
                    'id_categoria' => $request -> id_categoria,
                    'precio' => $request -> precio,
                    'estado' => $request -> estado,
                    'establecimiento_final' => $request -> establecimiento_final,
        ]);
        $data=$response->json();
        return redirect()->route('productos.index');
    }
}
