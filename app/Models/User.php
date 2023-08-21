<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // ... Other attributes and methods ...

    protected $fillable = [
        'first_name', 'last_name', 'username', 'password', 'english_proficiency', 'availability',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'availability' => 'json', // Cast availability attribute as JSON
    ];
}