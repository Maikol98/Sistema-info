<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    protected $table ='devolucion';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Fecha','Descripcion','Cantidad','Id_DetallePedido'
    ];
}
