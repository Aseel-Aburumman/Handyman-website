<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'handyman_id',
        'category_id',
        'skill_id',
        'service_id',
        'title',
        'description',
        'location',
        'estimated_time',
        'price',
        'status_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function handyman()
    {
        return $this->belongsTo(Handyman::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function gigs()
    {
        return $this->hasMany(Gig::class);
    }

}