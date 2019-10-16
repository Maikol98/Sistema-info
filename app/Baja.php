<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baja extends Model
{
    protected $table ='baja';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Fecha','Descripcion','TipoBaja','Id_Producto'
    ];
}
