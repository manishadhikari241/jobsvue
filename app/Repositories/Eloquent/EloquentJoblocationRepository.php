<?php

namespace App\Repositories\Eloquent;

use App\Joblocation;
use App\Repositories\Contracts\JoblocationRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentJoblocationRepository extends AbstractRepository implements JoblocationRepository
{
    public function entity()
    {
        return Joblocation::class;
    }
}
