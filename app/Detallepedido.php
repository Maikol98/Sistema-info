<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detallepedido extends Model
{
    protected $table ='detallepedido';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','SubTotal','Cantidad','Descripcion','Id_Producto','Id_Pedido'
    ];
}
