<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productoingreso extends Model
{
    protected $table ='productoingreso';
    protected $primaryKey='Id_Producto';
    public $timestamps=false;

    protected $fillable=[
        'Id_Producto','Id_Ingreso','Cantidad'
    ];
}
