<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreOwner extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'store_name', // English store name
        'store_name_ar', // Arabic store name
        'contact_number',
        'address', // English address
        'address_ar', // Arabic address
        'rating',
        'certificate_id',
    ];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function store()
    {
        return $this->hasOne(Store::class);
    }

    public function certificate()
    {
        return $this->belongsTo(Certificate::class);
    }

    // Dynamic getter for store name
    public function getStoreNameAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->store_name_ar : $this->attributes['store_name'];
    }

    // Dynamic getter for address
    public function getAddressAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->address_ar : $this->attributes['address'];
    }
}
