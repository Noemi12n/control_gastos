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
    }
}
