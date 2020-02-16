<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = ['configuration_key', 'configuration_value'];
}
