<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
     protected $table='movimiento';
    protected $primaryKey='mov_id';
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mov_id','mov_fecha', 'mov_tipo','mov_cantidad','mov_detalle','tip_id','usu_id',
    ];
}
