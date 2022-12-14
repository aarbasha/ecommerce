<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Permissions;


class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'number', 'cover'
    ];

    protected $with = ['users'];

    public function users()
    {
        return $this->hasOne(User::class);
    }


    public function Permissions()
    {
        return $this->hasMany(Permissions::class);
    }
}
