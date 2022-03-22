<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public $timestamps=false;
    protected$table='tipo';
    protected$primaryKey='tip_id';
    protected$fillable=[
        'tip_descripcion'
    ];
    

}
