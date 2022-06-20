<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocentesController extends Controller
{
    //
    public function create(){
        //Mostrar Formulario
        return view('formulario2');
    }
    public function store(Request $request){
        //Procesar el formulario
        return view('respuesta2');

        "Nombre: " . $request->input('nombre') . "<br/>" .
        "Apellidos: " . $request->input('apellidos') . "<br/>" .
         "Area: " . $request->input('area') . "<br/>" .
         "Número nomina: " . $request->input('numero_nomina') . "<br/>";
    }
}
