<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table ='ciudad';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','Nombre'
    ];

}
