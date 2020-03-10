<?php

namespace App\Repositories\Eloquent;

use App\Employer;
use App\Repositories\Contracts\EmployerRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

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
}
