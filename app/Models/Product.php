<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'name', // English name
        'name_ar', // Arabic name
        'rating',
        'description', // English description
        'description_ar', // Arabic description
        'price',
        'availability',
        'stock_quantity',
        'discounted_price',

        'image',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function shoppingCarts()
    {
        return $this->hasMany(ShoppingCart::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function follows()
    {
        return $this->hasMany(Follow::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'product_id');
    }

    public function image()
    {
        return $this->hasOne(Image::class, 'product_id');
    }

    // Dynamic getter for product name
    public function getNameAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->name_ar : $this->attributes['name'];
    }

    // Dynamic getter for product description
    public function getDescriptionAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->description_ar : $this->attributes['description'];
    }
}
