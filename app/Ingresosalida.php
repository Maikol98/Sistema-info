<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingresosalida extends Model
{
    protected $table ='ingresosalida';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Fecha','Tipo','Id_Estante'
    ];
}
