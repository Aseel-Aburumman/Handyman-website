<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryInfo extends Model
{
    use HasFactory;

    protected $table = 'delivery_infos';

    protected $fillable = [
        'user_id',
        'phone',
        'city',
        'location',
        'building_no',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
