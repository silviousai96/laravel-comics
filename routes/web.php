<?php

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

Route::get('/', function () {

    $comics_array = config('comics');

    $data = [
        'comics_array' => $comics_array,
    ];    

    return view('home', $data);
})->name('home');



Route::get('/product/{id}', function ($id) {

    $comics_array = config('comics');

    $product=[];

    foreach($comics_array as $comic) {
        if($comic['id'] == $id) {
            $product = $comic; 
        }
    }

    //se l'id del prodotto non esiste, ritorna errore 404
    if(empty($product)) {
        abort('404');
    }

    $data = [
        'product' => $product,
    ];

    //altrimenti stampo la view del prodotto
    return view('product', $data);
})->name('product');

