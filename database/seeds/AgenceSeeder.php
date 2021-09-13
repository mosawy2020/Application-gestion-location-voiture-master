<?php

use Illuminate\Database\Seeder;

class AgenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agences')->insert([
            'nom' => 'blalcar',
            'ville' => 'er-rich',
            'adresse' => 'hay 20 aut',
            'devise' => "car",
            'tel' => '0655213476',
            'fix' => '055213476',
            'email' => 'blalcar@gmail.com',
            'website' => "blalcar.com",
            'num_contrat' => 'yb4040',
            ]);  
    }
}
