<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function nuevaLista(){
       return view('/main/nuevaLista');
    }

    public function guardarLista(Request $request){
      $productos = [];
      for ($i = 0; $i < count($request->producto); $i++){
        $productos[] = ['producto' => $request->producto[$i], 'precio' => $request->precio[$i]];
      }
      return ($productos);
    }

}
