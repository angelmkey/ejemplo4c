<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/informacion', function(){
    return view('informacion');
});

Route::get('/calificaciones/{matricula?}',
     function($matricula="A0000"){
        return "Buscando calificaciones de $matricula";
});
Route::get('/con2',function(){
        return "Hoja de contacto...";
})->name('contacto2');

Route::get('/',function(){
    echo "<a href='".route('contacto2') ."'>Contactos 1</a> <br>";
    echo "<a href='".route('contacto2') ."'>Contactos 2</a> <br>";
    echo "<a href='".route('contacto2') ."'>Contactos 3</a> <br>";
    echo "<a href='".route('contacto2') ."'>Contactos 4</a> <br>";
});

Route::get('/{nombre?}',function($nombre="Lucho"){
    return view('home')->with('nombre',$nombre);
})->name('home');
*/

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/portfolio','portfolio')->name('portfolio');

Route::view('/contact','contact')->name('contact');

Route::view('phantom')->name('phantom');

