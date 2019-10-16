<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table ='administrador';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Cod_Admin','Nombre','Nombre','Telefono','Email','Estado'
    ];
}
