<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Employer extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return[
            'company_name'=>$this->company_name,
            'company_email'=>$this->company_email,
             'industry'=>$this->industries,
            'city'=>$this->cities,
            'location'=>$this->location,
            'primary_contact_no'=>$this->primary_contact_no,
            'secondary_contact_no'=>$this->secondary_contact_no,
            'username'=>$this->username,
            'password'=>$this->password,
            'status'=>$this->status,
            'package'=>$this->packages,
            'package_activated'=>$this->package_activated,
            'package_expired'=>$this->package_expired,
            'viewed'=>$this->viewed,
            'logo'=>$this->logo,

        ];
    }
}
