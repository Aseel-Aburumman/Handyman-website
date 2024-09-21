<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigPolicy extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['content', 'content_ar', 'visible'];

    protected $table = 'gig_policys';
    protected $dates = ['deleted_at'];

    // Dynamic getter for content
    public function getContentAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->content_ar : $this->attributes['content'];
    }
}
