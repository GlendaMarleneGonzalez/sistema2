<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MateriaAbiertaController;
//use App\Models\Alumno;


Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos.store',[AlumnoController::class, 'store'])->name('alumnos.store');

Route::get('/alumnos.edit/{alumno}',[AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::post('/alumnos.update/{alumno}',[AlumnoController::class, 'update'])->name('alumnos.update');

Route::get('/alumnos.show/{alumno}',[AlumnoController::class, 'show'])->name('alumnos.show');
Route::post('/alumnos.destroy/{alumno}',[AlumnoController::class, 'destroy'])->name('alumnos.destroy');


//Para Puestos
Route::get('/puestos.index',[PuestoController::class, 'index'])->name('puestos.index');

Route::get('/puestos.create',[PuestoController::class,'create'])->name('puestos.create');
Route::POST('/puestos.store',[PuestoController::class,'store'])->name('puestos.store');

Route::get('/puestos.edit/{puesto}',[PuestoController::class,'edit'])->name('puestos.edit');
Route::POST('/puestos.update/{puesto}',[PuestoController::class,'update'])->name('puestos.update');

Route::get('/puestos.show/{puesto}',[PuestoController::class,'show'])->name('puestos.show');
Route::POST('/puestos.destroy/{puesto}',[PuestoController::class,'destroy'])->name('puestos.destroy');


//Para Plazas
Route::get('/plazas.index',[PlazaController::class, 'index'])->name('plaza.index');

//para Departamaentos
Route::get('/materias.index', [MateriaAbiertaController::class, 'index'])->name('materiasa.index');


Route::get('/', function () {
    return view('inicio');
});

#Inicio de ejemplo de clase dia jueves 29 de ago. Modificacion Lunes 2 de sep.#

Route::get('/inicio/{carrera?}', function(string $carrera="sin carrera"){
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/alumnos', function () {
    return view('alumnos');
})->middleware("auth")->name("alumnos");    #Ejemplo esta parte se llama ruta#


Route::get('/maestros', function () {
    return view('maestros');
})->name("maestros");

Route::get('/plazas', function () {
    return view('plazas');
})->name("plazas");

Route::get('/carreras', function () {
    return view('carreras');
})->name("carreras");

Route::get('/reticulas', function () {
    return view('reticulas');
})->name("reticulas");

Route::get('/materias', function () {
    return view('materias');
})->name("materias");

Route::get('/', function () {
    //return view('Welcome');
    return view('inicio2');
});

Route::get('/', function () {
    return view('dashboard');
    //return view('inicio');
});

Route::get('/dashboard', function() {
   //return view('dashboard');
    return view('inicio2');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
