<?php

namespace App\Repositories\Eloquent;

use App\Employer;
use App\Repositories\Contracts\EmployerRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;
use Symfony\Component\Console\Input\Input;

class EloquentEmployerRepository extends AbstractRepository implements EmployerRepository
{
    public function entity()
    {
        return \App\Model\Employer::class;
    }

    public function store($request)
    {
      $data['company_name']=$request->company_name;
      $data['company_email']=$request->company_email;
      $data['industry_id']=$request->industry_id;
      $data['city_id']=$request->city_id;
      $data['location']=$request->location;
      $data['primary_contact_no']=$request->primary_contact_no;
      $data['secondary_contact_no']=$request->secondary_contact_no;
      $data['username']=$request->username;
      $data['password']=encrypt($request->password);
      $data['status']=$request->status;
      $data['package_id']=$request->package_id;
      $data['package_activated']=$request->package_activated;
      $data['package_expired']=$request->package_expired;
      $data['viewed']=$request->viewed;
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/employers/logo');
            $image->move($destinationPath, $name);
            $data['logo'] = $name;
        }
        $create=$this->entity()::create($data);
      return $create;

    }

    public function getAll()
    {
        $employer=$this->entity()::all();
        return $employer;
    }

    public function getbyId($id)
    {
        $employer=$this->entity()::find($id);
        return $employer;
    }

    public function delete($id)
    {
        $find=$this->entity()::find($id);
        $del=$find->delete();
        return $del;
    }

    public function update($request,$id)
    {
//        dd($id);
        $find=$this->entity()::find($id);
//        dd($find);
        $data['company_name']=$request->company_name;
        $data['company_email']=$request->company_email;
        $data['industry_id']=$request->industry_id;
        $data['city_id']=$request->city_id;
        $data['location']=$request->location;
        $data['primary_contact_no']=$request->primary_contact_no;
        $data['secondary_contact_no']=$request->secondary_contact_no;
        $data['username']=$request->username;
        $data['password']=encrypt($request->password);
        $data['status']=$request->status;
        $data['package_id']=$request->package_id;
        $data['package_activated']=$request->package_activated;
        $data['package_expired']=$request->package_expired;
        $data['viewed']=$request->viewed;
        if ($request->hasFile('logo')) {
            $this->delete_file($id);
            $image = $request->file('logo');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/employers/logo');
            $image->move($destinationPath, $name);
            $data['logo'] = $name;
        }
//        dd($request->all());

        $update=$find->update($data);
        return $update;
    }

    public function delete_file($id)
    {
        $findData = $this->entity::find($id);
        $fileName = $findData->logo;
        $deletePath = public_path('images/employers/logo/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }




}
