<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoriaController extends Controller
{
    //
     // funcion que consume la api y me muestra todos los registros
     public function index(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response= Http::get($url.'/categoria/all');

        $data2=$response->json();
        
        return view('categoria',compact('data2')); 
    } 
}
