<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $primaryKey='city_id';

    protected $fillable=['city_name','zip_code','status'];
}
