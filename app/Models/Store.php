<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes trait

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
    use SoftDeletes; // Use the SoftDeletes trait

    protected $dates = ['deleted_at']; // Specify that 'deleted_at' is a date
    public function storeOwner()
    {
        return $this->belongsTo(StoreOwner::class);
    }
    // A StoreOwner's User (the actual user who owns the store)
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
}
