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


//**** Site

//Home
Route::get('/', 'SiteController@home');

//Produtos
Route::get('/', 'SiteController@produtos');

//Carrinho
Route::get('/', 'SiteController@carrinho');