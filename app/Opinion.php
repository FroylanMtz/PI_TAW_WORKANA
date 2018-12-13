<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    public $timestamps = false;
  
  	protected $guarded = [];
  
    protected static function boot()
    {
        parent::boot();   
    }
}
