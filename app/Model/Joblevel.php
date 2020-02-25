<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Joblevel extends Model
{
    protected $primaryKey='job_level_id';

    protected $fillable=['job_level_name','status'];
}
