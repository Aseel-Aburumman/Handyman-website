<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'handyman_id',
        'store_id',
        'product_id',
        'gig_id',
        'message',

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

    public function gig()
    {
        return $this->belongsTo(Gig::class, 'gig_id');
    }
}
