<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('altro');
    // return view('welcome'); quindi basta cambiare il nome fino al primo punto? Da chiedere
});

Route::get('/prova1', function () {
    return view('welcome');
    // Per ogni pagina va creato una route, e dopo dal file con l'href bisogna mettere il valore che si trova nel get
});

Route::get('/prova', function () {
    if ("cose" == "giuste") {
        return view('welcome');
    } else {
        return view('altro');
    }
    // è possibile fare dei controlli per rimandare a delle pagine
});
