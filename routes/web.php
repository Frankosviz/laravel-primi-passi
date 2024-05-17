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
    return view('home');
});

Route::get('/hello_world', function () {
    return view('hello');
});

Route::get('/prova_dati', function () {
    $data = [
        'name' => 'Carolina',
        'surname' => 'Rossi',
        'eta' => 25,
        'luogo' => 'Benevento',
        'framework' => 'Laravel',
    ];
    return view('prova', $data);
});
