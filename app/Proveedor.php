<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table ='proveedor';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Cod_Proveedor','NombreP','Direccion','Telefono','Email','tipo','Estado'
    ];
}
