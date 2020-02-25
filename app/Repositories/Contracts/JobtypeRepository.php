<?php

namespace App\Repositories\Contracts;

interface JobtypeRepository
{
    public function store($request);

    public function getAll();

}
