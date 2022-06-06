<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Métodos de HTTP
get - obtener un recurso
post - Modificar o agregar un recusro (Ejemp.:formulario, procesar, editar)
put - Reemplazar completamente un recurso
patch - Modificar parcialmente un recurso
delete -Eliminar un recurso

*/
//Pagina principal
//Route::get('/', function () {
//  return view('welcome');
//});

Route::get('/', [WelcomeController::class, 'index']);

//Ruta de formulario
Route::get('/formulario/{n}', function ($n) {
  return view('formulario')->with('elidform', $n);
});

//Otra forma de pasar parametros (Ruta Formuarios)
//Route::get('/formulario/{n}', function ($n) {
//  return view('formulario')->withN($n);
//});

//Ruta para acceder a la página de contacto que usa una plantilla
Route::get('/contact', function () {
  return view('contact');
});

//RUTA  PARA LA VISTA ESTUDIANTES
//En método GET se necesita:
//la ruta desde el navegador
//Segundo parametro es el controlador
//Nombre del controlador
//Método al que accederé
//(RUTA DESDE EL NAVEGADOR, CONTROLADOR (NOMBRE DEL CONTROLADOR, MÉTODO))
Route::get('estudiante/{n}', [EstudianteController::class, 'show']);
//Un controlador tendra varios metodos por eso se especifica (método show)

//Crear una ruta en web.php (Se usa el método create)
Route::get('formulario', [EstudianteController::class, 'create']);

//Crear otra ruta y usar otro método --> post
Route::post('formulario', [EstudianteController::class, 'store']);

//create es para mostrar el formulario
//store es para guardar, procese el formulario
