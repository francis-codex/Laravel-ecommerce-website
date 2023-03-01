<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'full_name',
        'email',
        'password',
        'phone',
        'prev_password',
        'address_id'
    ];

    public function addresses()
    {
    	return $this->hasMany('App\Address', 'id', 'address_id');
    }
}
