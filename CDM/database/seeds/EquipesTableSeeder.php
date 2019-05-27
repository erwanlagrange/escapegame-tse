<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            'couleur' => 'bleue',
            'code_final' => 'DTA',
        ]);
        DB::table('equipes')->insert([
            'couleur' => 'rouge',
            'code_final' => 'DTA',
        ]);
        DB::table('equipes')->insert([
            'couleur' => 'verte',
            'code_final' => 'DTA',
        ]);
        DB::table('equipes')->insert([
            'couleur' => 'jaune',
            'code_final' => 'DTA',
        ]);
        DB::table('equipes')->insert([
            'couleur' => 'violette',
            'code_final' => 'DTA',
        ]);
    }
}
