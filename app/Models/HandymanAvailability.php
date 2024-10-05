<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HandymanAvailability extends Model
{
    use HasFactory;

    protected $table = 'handyman_availability';

    protected $fillable = [
        'handyman_id',
        'start_time',
        'end_time'
    ];

    public function handyman()
    {
        return $this->belongsTo(Handyman::class);
    }
}
