<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    protected $primaryKey='job_id';

    protected $fillable=['employer_id','job_title','job_description','no_of_vacancy','skills','duties_responsibility','job_level_id','job_type_id','job_category_id','experience','education','currency_id','salary','job_posted_date','valid_date','status','viewed','job_location'];
}
