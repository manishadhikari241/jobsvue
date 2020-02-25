<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jobtype extends Model
{
    protected $primaryKey='job_type_id';
    protected $fillable=['job_type_name','status'];
}
