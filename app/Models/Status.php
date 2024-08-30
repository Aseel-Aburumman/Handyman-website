<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_category',
        'name',
        'description',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function skillCertificates()
    {
        return $this->hasMany(SkillCertificate::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function gigs()
    {
        return $this->hasMany(Gig::class);
    }
}
