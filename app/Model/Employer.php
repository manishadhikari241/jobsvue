<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class Employer extends Authenticable
{
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'username'];

}
