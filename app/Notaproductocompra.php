<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notaproductocompra extends Model
{
    protected $table ='notaproductocompra';
    protected $primaryKey='Id_Producto';
    public $timestamps=false;

    protected $fillable=[
        'Id_Producto','Id_Compra','Cantidad','PrecioUnitario','Precio',
    ];
}
