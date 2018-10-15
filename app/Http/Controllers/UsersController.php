<?php

namespace App\Http\Controllers;

use App\Users;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users/show', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        return view('users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $user = new User();
        $user->first_name = $request->name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;

        if($user->save()){
            return redirect('/cadastro')->with('success', 'Cadastro realizado com sucesso.');
        }else{
            return redirect('/cadastro')->with('error', 'Falha ao concluir cadastro.');
        }
    }
}
