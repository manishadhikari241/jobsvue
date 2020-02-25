<?php

namespace App\Repositories\Eloquent;

use App\Jobtype;
use App\Repositories\Contracts\JobtypeRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentJobtypeRepository extends AbstractRepository implements JobtypeRepository
{
    public function entity()
    {
        return \App\Model\Jobtype::class;
    }

    public function getAll()
    {
        $job_type=\App\Model\Jobtype::all();
        return $job_type;
    }

    public function store($request)
    {
          $data['job_type_name']=$request->job_type_name;
          $data['status']=$request->status;
          $store=$this->entity()::create($data);
          return $store;
    }

    public function update($request,$id)
    {
        $find=$this->entity()::find($id);
        $data['job_type_name']=$request->job_type_name;
        $data['status']=$request->status;
        $update=$find->update($data);
        return $update;
    }

    public function delete($id)
    {
        $find=$this->entity()::find($id);
        $del=$find->delete();
        return $del;
    }
}
