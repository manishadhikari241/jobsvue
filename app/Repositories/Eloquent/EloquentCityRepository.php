<?php

namespace App\Repositories\Eloquent;

use App\City;
use App\Repositories\Contracts\CityRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentCityRepository extends AbstractRepository implements CityRepository
{
    public function entity()
    {
        return \App\Model\City::class;
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

    public function store($request)
    {
        $data['city_name']=$request->city_name;
        $data['zip_code']=$request->zip_code;
        $data['status']=$request->status;
        $create=$this->entity()::create($data);
        return $create;
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
        $data['city_name']=$request->city_name;
        $data['zip_code']=$request->zip_code;
        $data['status']=$request->status;
        $update=$find->update($data);
        return $update;
    }



}
