<?php

namespace App\Repositories\Contracts;

interface CityRepository
{
    public function store($request);

    public function getAll();
}
