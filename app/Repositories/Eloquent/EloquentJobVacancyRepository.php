<?php

namespace App\Repositories\Eloquent;

use App\JobVacancy;
use App\Repositories\Contracts\JobVacancyRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentJobVacancyRepository extends AbstractRepository implements JobVacancyRepository
{
    public function entity()
    {
        return \App\Model\JobVacancy::class;
    }

    public function store($request){

        $data['employer_id']=$request->employer_id;
        $data['job_title']=$request->job_title;
        $data['job_description']=$request->job_description;
        $data['no_of_vacancy']=$request->no_of_vacancy;
        $data['skills']=$request->skills;
        $data['duties_responsibility']=$request->duties_responsibility;
        $data['job_level_id']=$request->job_level_id;
        $data['job_type_id']=$request->job_type_id;
        $data['job_category_id']=$request->job_category_id;
        $data['experience']=$request->experience;
        $data['education']=$request->education;
        $data['currency_id']=$request->currency_id;
        $data['salary']=$request->salary;
        $data['job_posted_date']=$request->job_posted_date;
        $data['valid_date']=$request->valid_date;
        $data['status']=$request->status;
        $data['viewed']=$request->viewed;
        $data['location_id']=$request->location_id;
        $data['applicants']=$request->applicants;
        $create=$this->entity()::create($data);
        return $create;
    }

    public function getAll()
    {
       $all=$this->entity()::all();
       return $all;
    }
}
