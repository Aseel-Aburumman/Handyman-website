<?php

// GigPolicy.php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes trait

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigPolicy extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'visible'];

    use SoftDeletes; // Use the SoftDeletes trait
    protected $table = 'gig_policys';
    protected $dates = ['deleted_at']; // Specify that 'deleted_at' is a date

}
