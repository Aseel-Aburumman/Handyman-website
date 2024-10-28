<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HandymanApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'price_per_hour',
        'experience',
        'bio',
        'status',
        'flagged_parts'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
