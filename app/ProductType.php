<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $fillable = [
    	'product_type_name',
    	'product_type_description'
    ];

    public function product()
    {
    	return $this->hasMany(Product::class);
    }
}
