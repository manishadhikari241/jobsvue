<?php

namespace App\Repositories\Eloquent;

use App\Model\About;
use App\Repositories\Contracts\AboutRepositoryRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentAboutRepositoryRepository extends AbstractRepository implements AboutRepositoryRepository
{
    public function entity()
    {
        return About::class;
    }

    public function about($request)
    {
    }

}
