<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notacompra extends Model
{
    protected $table ='notacompra';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','FechaCompra','PrecioTotal','Id_Proveedor'
    ];
}
