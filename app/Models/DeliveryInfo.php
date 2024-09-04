<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes trait

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryInfo extends Model
{
    use HasFactory;

    protected $table = 'delivery_infos';
    use SoftDeletes; // Use the SoftDeletes trait

    protected $dates = ['deleted_at']; // Specify that 'deleted_at' is a date
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
