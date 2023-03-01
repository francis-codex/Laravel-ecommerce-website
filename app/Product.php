<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image_name',
        'description',
        'colors',
        'price',
        'discount',
        'tag',
        'category_id'
    ];

    public function category()
    {
    	return $this->belongsTo('App\Category','category_id','id');
    }
    
    
}
