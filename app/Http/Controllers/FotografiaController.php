<?php

namespace App\Http\Controllers;
use App\Http\Requests\FotografiaRequest;
use Illuminate\Http\Request;

class FotografiaController extends Controller
{
    //Mostrar formulario
    public function create()
    {
        return view('subirimagenes');
    }
    
//Método para procesar el formulario
    public function store(FotografiaRequest $request) 
    {
        $request->fotografia->store(config('images.path'),'public');
        return view('respuesta');
    }

}
