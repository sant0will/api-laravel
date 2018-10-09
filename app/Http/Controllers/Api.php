<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Api extends Controller
{
    public function index()
    {
        echo User::all();
    }
    
    public function store_user()
    {
        $user = new User();
        $user->first_name = $_GET["first_name"];
        $user->last_name = $_GET["last_name"];
        $user->phone = $_GET["phone"];
        $user->email = $_GET["email"];

        if($user->save()){
            return true;
        }else{
            return false;
        }
    }    
}
