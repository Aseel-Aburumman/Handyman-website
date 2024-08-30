<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_owner_id',
        'name',
        'location',
        'description',
        'status_id',
        'rating',
    ];

    public function storeOwner()
    {
        return $this->belongsTo(StoreOwner::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
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

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
