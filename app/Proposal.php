<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
  public $timestamps = false;
  
  protected $guarded = [];
  
    protected static function boot()
    {
        parent::boot();   
    }
  
  
  
}
