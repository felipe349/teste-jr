<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PrincipalController@home');

Route::group(['middleware'  =>  ['cors', 'api'], 'prefix'    =>  'api'], function(){
    
    Route::post('/cadastrarVenda', 'Api\VendedorController@armazenar');
    
    Route::post('/retornarValor', 'Api\VendedorController@getComissao');
    
});