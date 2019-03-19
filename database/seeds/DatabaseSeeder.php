<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('botao')->insert([
            'id' => 1,
            'botao' => 0
        ]);

        DB::table('botoes')->insert([
            'id' => 1,
            'botao' => 0
        ]);
    
    }
}
