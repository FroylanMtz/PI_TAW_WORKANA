<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{

    protected $guarded = [];

    protected static function boot()
    {

        parent::boot();
        
    }

    public function traerDatos(){
        return App\Trabajo::all();
    }

}
