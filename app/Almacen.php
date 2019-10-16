<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table ='almacen';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Cod_Almacen','Dimension','Capacidad','Direccion'
    ];
}
