<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'product_name',
    	'product_description',
    	'product_price',
    	'product_sale_price',
    	'product_tipo_id',
    	'product_color_id'
    ];

    public function color()
    {
    	return $this->belongsTo(Color::class);
    }

    public function product_type()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function images()
    {
        return $this->hasMany(AnyImage::class);
    }
}
