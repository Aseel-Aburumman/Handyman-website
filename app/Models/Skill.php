<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes trait

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function gigs()
    {
        return $this->hasMany(Gig::class);
    }
    use SoftDeletes; // Use the SoftDeletes trait

    protected $dates = ['deleted_at']; // Specify that 'deleted_at' is a date

    public function skillCertificates()
    {
        return $this->hasMany(SkillCertificate::class);
    }

    public function handymen()
    {
        return $this->belongsToMany(Handyman::class, 'skill_certificates', 'skill_id', 'handyman_id');
    }
}
