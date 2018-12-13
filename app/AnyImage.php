<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnyImage extends Model
{
    protected $fillable = ['image_description', 'image_url', 'image_title', 'image_alt'];

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
