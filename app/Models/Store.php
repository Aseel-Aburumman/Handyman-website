<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'store_owner_id',
        'name', // English store name
        'name_ar', // Arabic store name
        'location',
        'description', // English description
        'description_ar', // Arabic description
        'status_id',
        'rating',
    ];

    protected $dates = ['deleted_at'];

    public function storeOwner()
    {
        return $this->belongsTo(StoreOwner::class);
    }

    public function ownerUser()
    {
        return $this->hasOneThrough(User::class, StoreOwner::class, 'id', 'id', 'store_owner_id', 'user_id');
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
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'store_id');
    }

    // Dynamic getter for store name
    public function getNameAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->name_ar : $this->attributes['name'];
    }

    // Dynamic getter for description
    public function getDescriptionAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->description_ar : $this->attributes['description'];
    }
}
