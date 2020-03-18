<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Joblocation extends Model
{
    protected $primaryKey='location_id';

    protected $fillable=['location_name','image','status'];
}
