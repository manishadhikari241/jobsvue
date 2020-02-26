<?php

namespace App\Repositories\Contracts;

interface BlogCategoryRepository
{
    public function store($request);

    public function getAll();
}
