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

Route::get('/', function () {
    return view('index');
});
Route::get('/inicio', function () {
    return view('index');
});
Route::get('/db', function () {
    return view('bd');
});
Route::get('/fs', function () {
    return view('fs');
});
Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/recursos', function () {
    return view('recursos');
});
Route::get('/memoristas', function () {
    return view('memoristas');
});
Route::get('bibliotecas', function () {
    return view('bibliotecas');
});

Route::get('/investigacion', function () {
    return view('investigacion');
});

Route::get('/reglamento', function () {
    return view('reglamento');
});

Route::get('/novedades', function () {
    return view('novedades');
});

Route::get('/novedades1', function () {
    return view('novedades1');
});

Route::get('/novedades2', function () {
    return view('novedades2');
});

Route::get('/novedades3', function () {
    return view('novedades3');
});





Route::get('/usuario/inicio', function () {
    return view('usuario/index');
});
Route::get('/usuario/db', function () {
    return view('usuario/bd');
});
Route::get('/usuario/fs', function () {
    return view('usuario/fs');
});
Route::get('/usuario/servicios', function () {
    return view('usuario/servicios');
});
Route::get('/usuario/recursos', function () {
    return view('usuario/recursos');
});
Route::get('/usuario/memoristas', function () {
    return view('usuario/memoristas');
});
Route::get('/usuario/bibliotecas', function () {
    return view('usuario/bibliotecas');
});
Route::get('/usuario/investigacion', function () {
    return view('usuario/investigacion');
});
Route::get('/usuario/reglamento', function () {
    return view('usuario/reglamento');
});
Route::get('/usuario/novedades', function () {
    return view('usuario/novedades');
});
Route::get('/usuario/novedades1', function () {
    return view('usuario/novedades1');
});
Route::get('/usuario/novedades2', function () {
    return view('usuario/novedades2');
});
Route::get('/usuario/novedades3', function () {
    return view('usuario/novedades3');
});
Route::get('/usuario/user', function () {
    return view('usuario/user');
});



