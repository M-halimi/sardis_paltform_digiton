<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::view('/','home.index')->name('home.index');
Route::view('/boutique','boutique.index')->name('boutique.index');
Route::view('/detail-produit','boutique.show')->name('boutique.show');
