<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table ='vehiculo';
    protected $primaryKey='Placa';
    protected $keyType='char[10]';
    public $incrementing=false;
    public $timestamps=false;

    protected $fillable=[
        'Id','Modelo','Color','Capacidad','Id_Chofer'
    ];
}
