<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garantia extends Model
{
    protected $table ='garantia';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Cod_Garantia','Duracion'
    ];
}
