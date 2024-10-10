<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'handyman_id',
        'gig_id',
        'amount',
        // 'skill_id',
        'description',
        'status_id',

    ];

    public function handyman()
    {
        return $this->belongsTo(Handyman::class);
    }

    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
