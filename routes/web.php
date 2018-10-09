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
Route::get('api/', function () {
    dd("chegou");
    echo User::all()->toJson();
});
Route::get('api/store_user', function () {
    $user = new User();
    $user->first_name = $_GET["first_name"];
    $user->last_name = $_GET["last_name"];
    $user->phone = $_GET["phone"];
    $user->email = $_GET["email"];
    if($user->save()){
        echo 1;
    }else{
        echo 0;
    }
});
