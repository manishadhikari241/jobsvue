<?php

namespace App\Repositories\Eloquent;

use App\Model\Employer;
use App\Repositories\Contracts\EmployerRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentEmployerRepository extends AbstractRepository implements EmployerRepository
{
    public function entity()
    {
        return Employer::class;
    }

    public function getAll()
    {
        $employer = $this->entity()::all();
        return $employer;
    }

}
