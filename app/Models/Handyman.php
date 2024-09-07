<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes trait

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
    use SoftDeletes; // Use the SoftDeletes trait

    protected $dates = ['deleted_at']; // Specify that 'deleted_at' is a date
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

    public function reports()
    {
        return $this->hasMany(Report::class, 'handyman_id');
    }

    protected $table = 'handymans';
}
