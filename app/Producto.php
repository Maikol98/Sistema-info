<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table ='producto';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Cod_Producto','Nombre','Marca','Precio','PrecioPromedio','Stock','Id_Garantia'
    ];
}
