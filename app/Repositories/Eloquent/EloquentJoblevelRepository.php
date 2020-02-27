<?php

namespace App\Repositories\Eloquent;

use App\Job;
use App\Model\Joblevel;
use App\Repositories\Contracts\JoblevelRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentJoblevelRepository extends AbstractRepository implements JoblevelRepository
{
    public function entity()
    {
        return Joblevel::class;
    }

    public function getAll()
    {
        $job_level = $this->entity()::all();
        return $job_level;
    }

    public function getbyId($id)
    {
        $job_level=$this->entity()::find($id);
        return $job_level;
    }


    public function store($request)
    {
       $data['job_level_name']=$request->job_level;
       $data['status']=$request->status;
       $create=$this->entity()::create($data);
       return $create;
    }

    public function update_joblevel($request, $id)
    {
        $find = $this->entity()::find($id);
        $data['job_level_name']=$request->job_level;
        $data['status']=$request->status;
        $update = $find->update($data);
        return $update;
    }

    public function delete_joblevel($id)
    {
        $find=$this->entity()::find($id);
        $del=$find->delete();
        return $del;
    }
}
