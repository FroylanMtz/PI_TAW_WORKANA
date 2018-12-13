<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
   	protected $guarded = [];
	
    protected static function boot()
    {
        parent::boot();   
    }
	
		public function user()
    {
        return $this->belongsTo('App\User');
    }
	
    public $timestamps = false;#a ve si funciona con esto
}
