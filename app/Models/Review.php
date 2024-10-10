<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'handyman_id',
        'store_id',
        'gig_id',

        'product_id',
        'client_id',
        'review',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function handyman()
    {
        return $this->belongsTo(Handyman::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }
}
