<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table ='pedido';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','PrecioTotal','FechaPedido','FechaEntrega','Direccion','Descripcion','Estado','Id_Cliente','Placa'
    ];
}
