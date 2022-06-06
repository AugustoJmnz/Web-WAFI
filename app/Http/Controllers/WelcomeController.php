<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //index sirve para definir dentro de un controlador que sucedera con la 
    //pagina principal de la vista que este relacionada con este controlador.

    public function index()
    {
        return view('welcome');
    }
}
