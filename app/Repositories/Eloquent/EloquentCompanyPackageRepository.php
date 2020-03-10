<?php

namespace App\Repositories\Eloquent;


use App\Repositories\Contracts\CompanyPackageRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentCompanyPackageRepository extends AbstractRepository implements CompanyPackageRepository
{
    public function entity()
    {
        return \App\Model\CompanyPackage::class;
    }

    public function getById($id)
    {
        $find=$this->entity()::find($id);
        return $find;
    }

    public function store($request)
    {
        $data['package_name']=$request->package_name;
        $data['price']=$request->price;
        $data['duration']=$request->duration;
        $data['features']=$request->features;
        $data['status']=$request->status;
        $create=\App\Model\CompanyPackage::create($data);
        return $create;
    }

    public function getAll()
    {
        $all=$this->entity()::all();
        return $all;
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
        $data['package_name']=$request->package_name;
        $data['price']=$request->price;
        $data['duration']=$request->duration;
        $data['features']=$request->features;
        $data['status']=$request->status;
        $update=$find->update($data);
        return $update;

    }
}
