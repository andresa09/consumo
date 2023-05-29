<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    //
    public function index(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response= Http::get($url.'/producto/all');
        $data=$response->json();
        return view('productos',compact('data')); 
    } 
    
    public function create(){
        return view('producto');
    }
    public function store (Request $request){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::post($url.'/producto/store',[
                
                    'id' => $request -> id,
                    'descripcion' => $request -> descripcion,
                    'id_categoria' => $request -> id_categoria,
                    'precio' => $request -> precio,
                    'estado' => $request -> estado,
                    'establecimiento_final' => $request -> establecimiento_final,
        ]);
        return redirect()->route('index');
    }
}
