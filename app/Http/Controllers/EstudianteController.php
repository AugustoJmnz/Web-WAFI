<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormularioRequest;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    //CREAMOS UN MÉTODO
    public function show($matricula)
    {
        return view('estudiante')->with('lamatricula', $matricula);
    }

    //Método para la vista del formulario
    public function create()
    {
        return view('formulario');
    }

    //Método para procesar el formulario
    
    public function store(FormularioRequest $request) 
    {
        return view('respuestas');

        "Tour: " . $request->input('tour') . "<br/>" .
        "Precio: " . $request->input('precio') . "<br/>" .
         "Guia: " . $request->input('guia') . "<br/>" .
         "Amenidades: " . $request->input('amen') . "<br/>" .
         "Descripcion: " . $request->input('descp');

    }
}

