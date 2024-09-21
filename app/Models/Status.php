<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status_category',
        'name', // English name
        'name_ar', // Arabic name
        'description', // English description
        'description_ar', // Arabic description
    ];

    protected $dates = ['deleted_at'];

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

    // Dynamic getter for localized content
    public function getNameAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->name_ar : $this->attributes['name'];
    }

    public function getDescriptionAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->description_ar : $this->attributes['description'];
    }
}
