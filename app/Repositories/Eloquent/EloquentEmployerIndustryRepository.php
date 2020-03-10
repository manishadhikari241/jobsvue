<?php

namespace App\Repositories\Eloquent;

use App\EmployerIndustry;
use App\Repositories\Contracts\EmployerIndustryRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentEmployerIndustryRepository extends AbstractRepository implements EmployerIndustryRepository
{
    public function entity()
    {
        return \App\Model\EmployerIndustry::class;
    }

    public function store($request)
    {
        $data['industry_name']=$request->industry_name;
        $data['status']=$request->status;
        $create=\App\Model\EmployerIndustry::create($data);
        return $create;
    }

    public function getAll()
    {
        $all=$this->entity()::all();
        return $all;
    }

    public function getbyId($id)
    {
        $id=$this->entity()::find($id);
        return $id;
    }

    public function delete($id)
    {
        $find=$this->entity()::findorfail($id);
        $del=$find->delete();
        return $del;
    }

    public function update($request,$id)
    {
        $find=$this->entity()::findorfail($id);
        $data['industry_name']=$request->industry_name;
        $data['status']=$request->status;
        $update=$find->update($data);
        return $update;
    }
}
