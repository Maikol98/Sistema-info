<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notaventa extends Model
{
    protected $table ='notaventa';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','PercioTotal','FechaVenta','Id_Cliente','Id_Admin'
    ];
}
