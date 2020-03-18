<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Vacancy extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
//            'employer' => $this->employers,
            'job_title' => $this->job_title,
            'job_description' => $this->job_description,
            'no_of_vacancy' => $this->no_of_vacancy,
            'skills' => $this->skills,
            'duties_responsibility' => $this->duties_responsibility,
            'job_level' => $this->joblevels,
            'job_type' => $this->jobtypes,
            'job_category' => $this->categories,
            'experience' => $this->experience,
            'education' => $this->education,
            'currency' => $this->currencies,
            'salary' => $this->salary,
            'job_posted_date' => $this->job_posted_date,
            'valid_date' => $this->valid_date,
            'status' => $this->status,
            'viewed' => $this->viewed,
            'location' => $this->locations,
            'no_of_applicants' => $this->applicants
        ];
    }
}
