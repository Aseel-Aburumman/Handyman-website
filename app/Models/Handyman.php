<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handyman extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'experience',
        'store_location',
        'bio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skillCertificates()
    {
        return $this->hasMany(SkillCertificate::class);
    }

    public function gigs()
    {
        return $this->hasMany(Gig::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    protected $table = 'handymans';
}
