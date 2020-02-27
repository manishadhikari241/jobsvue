<?php

namespace App\Repositories\Contracts;

interface BlogRepository
{
    public function store($request);

    public function getAll();
}
