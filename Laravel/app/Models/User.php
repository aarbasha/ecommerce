<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Models\Roles;

class User extends Authenticatable implements JWTSubject
{
    use  HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'username',
        'phone',
        'email',
        'password',
        'description',
        'avatar'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function Roles()
    {
        return $this->belongsTo(Roles::class ,'role_id', 'id');
    }


}
