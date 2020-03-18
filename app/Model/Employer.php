<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $primaryKey='employer_id';

    protected $fillable=['company_name','company_email','industry_id','city_id','location','primary_contact_no','secondary_contact_no','username','password','status','logo','package_id','package_activated','package_expired','viewed'];

    public function industries()
    {
        return $this->belongsTo('App\Model\EmployerIndustry','industry_id');
    }

    public function cities()
    {
        return $this->belongsTo('App\Model\City','city_id');
    }

    public function packages()
    {
        return $this->belongsTo('App\Model\CompanyPackage','package_id');
    }
}
