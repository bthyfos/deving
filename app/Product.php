<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductType;

class Product extends Model
{
    public function type()
    {
    	return $this->belongsTo(ProductType::class);
    }
}
