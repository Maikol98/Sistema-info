<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table ='cliente';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Ci_Cliente','Nombre','Direccion','Telefono','Correo','Estado','Id_Distrito'
    ];
}
