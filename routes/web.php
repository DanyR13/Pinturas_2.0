<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PruebasController@login');

Route::get('/picasso', [
    'uses' => 'PruebasController@picasso',
    'as' => 'picasso'
]);
Route::get('/van', [
    'uses' => 'PruebasController@van',
    'as' => 'van'
]); 
Route::get('/vinci', [
    'uses' => 'PruebasController@vinci',
    'as' => 'vinci'
]); 
Route::get('/rembr', [
    'uses' => 'PruebasController@rembr',
    'as' => 'rembr'
]); 
Route::get('/kahlo', [
    'uses' => 'PruebasController@kahlo',
    'as' => 'kahlo'
]); 
Route::post('valida', 'PruebasController@validarLogin');