<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'display_name',
        'email',
        'password',
        'twitter_name',
        'bio',
        'role',
        'status',
    ];

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
        'password' => 'hashed',
        'role' => 'string',
        'status' => 'string',
    ];
    
    /**
     * Get the works created by the user.
     */
    public function works()
    {
        return $this->hasMany(Work::class);
    }
    
    /**
     * Get the work evaluations created by the user.
     */
    public function workEvaluations()
    {
        return $this->hasMany(WorkEvaluation::class);
    }
    
    /**
     * Check if the user is an admin.
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
    
    /**
     * Check if the user is a staff member.
     */
    public function isStaff()
    {
        return $this->role === 'staff';
    }
    
    /**
     * Check if the user is a general user.
     */
    public function isGeneral()
    {
        return $this->role === 'general';
    }
    
    /**
     * Check if the user is active.
     */
    public function isActive()
    {
        return $this->status === 'active';
    }
}
