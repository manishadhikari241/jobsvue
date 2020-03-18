<?php

namespace App\Repositories\Eloquent;

use App\Joblocation;
use App\Repositories\Contracts\JoblocationRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentJoblocationRepository extends AbstractRepository implements JoblocationRepository
{
    public function entity()
    {
        return \App\Model\Joblocation::class;
    }

    public function store($request)
    {
        $data['location_name']=$request->location_name;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/jobs/locations');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
        }
        $data['status']=$request->status;
        $create=$this->entity()::create($data);
        return $create;
    }

    public function getAll()
    {
        $all=$this->entity()::all();
        return $all;
    }

    public function getbyId($id)
    {
        $find=$this->entity()::find($id);
        return $find;
    }

    public function delete($id)
    {
       $find=$this->entity()::find($id);
       $del=$find->delete();
       return $del;
    }

    public function update($request,$id)
    {
//        dd($request->all());
        $find=$this->entity()::find($id);
        if ($request->hasFile('image')) {
            $this->delete_file($id);
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/jobs/locations');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
        }
        $data['status']=$request->status;
        $data['location_name']=$request->location_name;
        $update=$find->update($data);
        return $update;
    }

    public function delete_file($id)
    {
        $findData = $this->entity::find($id);
//        dd($findData->image);
        $fileName = $findData->image;
        $deletePath = public_path('images/jobs/locations/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }
}
