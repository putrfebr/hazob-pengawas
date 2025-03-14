<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $fillable = ['email', 'password'];

    // Hash password saat diset
    public function setPasswordAttribute($value)
    {
        if (!Hash::needsRehash($value)) {
            $this->attributes['password'] = Hash::make($value);
        }
    }
}
