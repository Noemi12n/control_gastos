<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipo')->insert([
            'tip_descripcion'=>'Sueldos'
        ]);
        DB::table('tipo')->insert([
            'tip_descripcion'=>'Alimentación'
        ]);
        DB::table('tipo')->insert([
            'tip_descripcion'=>'Ocio'
        ]);
        DB::table('tipo')->insert([
            'tip_descripcion'=>'Educación'
        ]);
    }
}
