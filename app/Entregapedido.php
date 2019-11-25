<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entregapedido extends Model
{
    protected $table ='entregapedido';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Id_Chofer','PlacaVehiculo'
    ];
}
