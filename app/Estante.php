<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estante extends Model
{
    protected $table ='estante';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Capacidad','Descripcion','Id_Almacen','Id_Categoria'
    ];
}
