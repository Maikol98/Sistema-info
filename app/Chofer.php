<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chofer extends Model
{
    protected $table ='chofer';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Ci_Chofer','Nombre','Telefono','Direccion'
    ];
}
