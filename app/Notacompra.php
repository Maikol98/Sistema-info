<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notacompra extends Model
{
    protected $table ='notacompra';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'id','FechaCompra','PrecioTotal','Id_Proveedor'
    ];
}
