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
    $data = config('databasepasta');

    //dd($data);

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach($data as $key => $pasta) {

        $pasta['id'] = $key;

        if($pasta["tipo"] == "lunga") {
            $lunghe[] = $pasta;
        } elseif ($pasta["tipo"] == "corta") {
            $corte[] = $pasta;
        }elseif ($pasta["tipo"] == "cortissima") {
            $cortissime[] = $pasta;
        }
    };

    //dd($cortissime, $lunghe, $corte);

    return view('home', [
        'lunghe' => $lunghe,
        'corte' => $corte,
        'cortissime' => $cortissime,
    ]);
})->name('home');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/prodotto/{id}', function ($id) {
    
    $data = config('databasepasta');
        
    return view('product', [
        'product' => $data[$id]
    ]);
})->name('prodotto');