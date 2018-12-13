<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];
	
		//protected $primaryKey = 'user_id';

    protected $hidden = [
        'remember_token',
    ];


    public function category()
    {
        return $this->hasOne('App\Category');
    }


    public function skills()
    {
        return $this->belongsToMany('App\Skill');
		}
	
		public function jobs()
		{
				return $this->hasMany('App\Job');
		}
  
   public $timestamps = false;#a ve si funciona con esto
}
