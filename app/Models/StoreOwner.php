<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreOwner extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'store_name',
        'contact_number',
        'address',
        'rating',
        'certificate_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stores()
    {
        return $this->hasMany(Store::class);
    }

    public function certificate()
    {
        return $this->belongsTo(Certificate::class);
    }
}