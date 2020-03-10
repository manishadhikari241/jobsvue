<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EmployerIndustry extends Model
{
    protected $primaryKey='industry_id';

    protected $fillable=['industry_name','status'];
}
