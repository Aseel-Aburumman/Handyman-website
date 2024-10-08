<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes trait

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rating',
        'image',
        'role_id',
        'date_created',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function delivery_info()
    {
        return $this->hasOne(DeliveryInfo::class);
    }
    public function reports()
    {
        return $this->hasMany(Report::class, 'user_id');
    }

    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function messagesReceived()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function follows()
    {
        return $this->hasMany(Follow::class, 'follower_id');
    }

    public function followers()
    {
        return $this->hasMany(Follow::class, 'followed_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function reviewsWritten()
    {
        return $this->hasMany(Review::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'handyman_id');
    }

    public function handyman()
    {
        return $this->hasOne(Handyman::class);
    }

    public function storeOwner()
    {
        return $this->hasOne(StoreOwner::class);
    }

    public function shoppingCarts()
    {
        return $this->hasMany(ShoppingCart::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
    public function gigs()
    {
        return $this->hasMany(Gig::class);
    }

    public function deliveryInfo()
    {
        return $this->hasOne(DeliveryInfo::class);
    }
    public function purchases()
    {
        return $this->hasMany(Sale::class, 'user_id');
    }
    use SoftDeletes; // Use the SoftDeletes trait

    protected $dates = ['deleted_at']; // Specify that 'deleted_at' is a date

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
