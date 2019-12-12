<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalleentregapedido extends Model
{
    protected $table ='detalleentregapedido';
    protected $primaryKey='IdPedido';
    public $timestamps=false;

    protected $fillable=[
        'IdPedido','IdEntrega'
    ];
}
