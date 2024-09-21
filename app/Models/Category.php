<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes trait

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_ar',
        'description_ar',
        'description',
    ];
    use SoftDeletes; // Use the SoftDeletes trait

    protected $dates = ['deleted_at']; // Specify that 'deleted_at' is a date
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    // Dynamic getters for localized content
    public function getNameAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->name_ar : $this->attributes['name'];
    }

    public function getDescriptionAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->description_ar : $this->attributes['description'];
    }
}
