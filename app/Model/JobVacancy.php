<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    protected $primaryKey='job_id';

    protected $fillable=['employer_id','job_title','job_description','no_of_vacancy','skills','duties_responsibility','job_level_id','job_type_id','job_category_id','experience','education','currency_id','salary','job_posted_date','valid_date','status','viewed','location_id','applicants'];

    public function employers()
    {
        return $this->hasMany('App\Model\Employer','employer_id');
    }
    public function joblevels()
    {
        return $this->belongsTo('App\Model\Joblevel','job_level_id');
    }

    public function jobtypes()
    {
        return $this->belongsTo('App\Model\Jobtype','job_type_id');
    }

    public function categories()
    {
        return $this->belongsTo('App\Model\Category','job_category_id');
    }

    public function currencies()
    {
        return $this->belongsTo('App\Model\Currency','currency_id');
    }

    public function locations()
    {
        return $this->belongsTo('App\Model\Joblocation','location_id');
    }
}
