<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'name', 'price', 'stock_quantity', 'is_active', 'description'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function primaryimage()
    {
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }
}
