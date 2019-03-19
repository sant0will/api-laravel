<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class BotaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd("deu");
       $botao = DB::table('botao')->get();

        return view('users.index', ['botao' => $botao]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        $botao = DB::table('botao')->first()->botao;

        if($botao == 0){
            $botao = 1;
        }else{
            $botao = 0;
        }

        DB::beginTransaction();

        try {

            DB::table('botao')
                ->where('id', 1)
                ->update(['botao' => $botao]);

            DB::commit();

            return 1;

        } catch (\PDOException $e) {
            DB::rollBack();

            return 0;
        }

    }

    public function registerBotoes($id)
    {
        DB::beginTransaction();

        try {
            DB::table('botoes')
                ->where('id', 1)
                ->update(['botao' => $id]);

            DB::commit();

            return 1;

        } catch (\PDOException $e) {
            DB::rollBack();

            return 0;
        }

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
