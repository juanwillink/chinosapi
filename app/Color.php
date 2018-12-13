<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
    	'color_name'
    ];	

    public function product()
    {
    	return $this->hasMany(Product::class);
    }
}
