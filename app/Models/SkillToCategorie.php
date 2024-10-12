<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillToCategorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'skill_id'

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    protected $table = 'skilltocategories';
}
