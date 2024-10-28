<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreOwnerApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'certificate_id',
        'store_name',
        'store_name_ar',
        'contact_number',
        'address',
        'address_ar',
        'location',
        'description',
        'description_ar',
        'status',
        'flagged_parts'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function certificate()
    {
        return $this->belongsTo(Certificate::class);
    }
}
