<?php

use App\alumno;
use App\Http\Controllers\Alumnos;
use App\Http\Controllers\alumnos as ControllersAlumnos;
use App\Http\Controllers\prueba;
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
*/
Auth::routes();

Route::apiResources([
    'Alumnos'=>prueba::class,
]);

Route::get('/', function () {
    return view('welcome');
});