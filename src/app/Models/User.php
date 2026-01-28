<?php

namespace App\Models;

use Auth;
use Illuminate\Foundation\Auth\User as Authenticated;

class User extends Authenticated
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function responses()
    {
        return $this->hasMany(Response::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
