<?php
use App\Models\User;
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
    return view('welcome');
});

Route::resource('api/', 'Api');

Route::get('api/store_user', 'Api@store_user');

Route::resource('cadastro/', 'UsersController');

Route::resource('botao/', 'BotaoController');

Route::get('cadastro/mostrar', 'UsersController@mostrar');

Route::get('botao/ajax', function () {
    return DB::table('botao')->get();
});
