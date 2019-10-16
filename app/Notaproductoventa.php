<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notaproductoventa extends Model
{
    protected $table ='notaproductoventa';
    protected $primaryKey='Id_Producto';
    public $timestamps=false;

    protected $fillable=[
        'Id_Producto','Id_NotaVenta','Cantidad','PrecioUnitario'
    ];
}
