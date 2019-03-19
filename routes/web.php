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
    $response = DB::table('botao')->get();
    return response()->json([
    'result' => 
        $response
    ]);
});

Route::get('ajax/register/', 'BotaoController@register');

Route::get('botoes/',  function () {
    return view('users.botoes');
});


Route::get('botoes/ajax', function () {
    $response = DB::table('botoes')->get();
    return response()->json([
    'result' => 
        $response
    ]);
});

Route::get('ajax/{id}/registerBotoes/', 'BotaoController@registerBotoes');
