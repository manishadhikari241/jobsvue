<?php

namespace App\Repositories\Contracts;

interface CompanyPackageRepository
{
    public function store($request);

    public function getAll();

}
