<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'name',
        'rating',
        'description',
        'price',
        'availability',
        'stock_quantity',
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
}
