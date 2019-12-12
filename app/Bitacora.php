<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    protected $table ='bitacoras';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'id','fecha','nombreUser','accion','tipo'
    ];
}
