<?php

namespace App\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
		'name','detail','stock','price','discount'
	];

    public function reviews()
    {
    	return $this->hasMany(Review::class); 
    }
}
