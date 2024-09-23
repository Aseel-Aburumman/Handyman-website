<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'store_id',
        'product_id',
        'gig_id'

    ];


    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
