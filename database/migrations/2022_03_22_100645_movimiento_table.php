<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MovimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento', function(Blueprint $table){
            $table->id('mov_id');
            $table->date('mov_fecha');
            $table->integer('mov_tipo');
            $table->float('mov_cantidad');
            $table->string('mov_detalle');
            $table->foreignId('tip_id')->references('tip_id')->on('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimiento');
    }
}
