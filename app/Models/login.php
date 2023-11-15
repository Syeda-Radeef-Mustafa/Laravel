<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
// app/User.php
{
    protected $fillable = [
         'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
