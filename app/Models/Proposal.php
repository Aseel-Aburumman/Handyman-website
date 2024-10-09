<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable = [
        'handyman_id',
        'gig_id',
        'proposal',
        'price_per_hour',
        'total',
        'time',
        'status_id'
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
