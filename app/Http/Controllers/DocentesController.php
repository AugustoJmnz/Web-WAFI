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
        //return view('respuesta2');

        //"Nombre: " . $request->input('nombre') . "<br/>" .
       // "Apellidos: " . $request->input('apellidos') . "<br/>" .
       //  "Area: " . $request->input('area') . "<br/>" .
         //"Número nomina: " . $request->input('numero_nomina') . "<br/>";
         //Eloquent ermite guadra la base de datos

//Insercción en la base de datos
//1.- Crear una variable de represente el modelo
//Instanciación de una clase
$docente= new \App\Models\Docente;
//2.- Asociar cada atributo con los datos de el formulario

$docente->nombre=$request->nombre;
$docente->apellidos=$request->apellidos;
$docente->area=$request->area;
$docente->numero_nomina=$request->numero_nomina;

//3.- Invocar al método guardar

$docente->save();

//4.- Bonus
//Mostrar un menssaje de confirmación
return"Docente registrado correctamente";

    }
}
