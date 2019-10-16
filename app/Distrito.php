<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table ='distrito';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Nro_Distrito','Nombre','Id_Ciudad'
    ];
}
