<?php

use Illuminate\Database\Seeder;

class UserSeeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'meno'=>"Jan",
            'priezvisko'=>"Mrkvicka",
            'email'=>"mrkva@co.sk",
            'heslo'=>bcrypt('secret'),
            'vek'=>20,
        ]);
    }
}
