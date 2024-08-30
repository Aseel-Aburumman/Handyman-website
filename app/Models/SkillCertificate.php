<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_id',
        'handyman_id',
        'status_id',
        'certificate_id',
    ];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function handyman()
    {
        return $this->belongsTo(Handyman::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function certificate()
    {
        return $this->belongsTo(Certificate::class);
    }
}
