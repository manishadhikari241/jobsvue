<?php

namespace App\Repositories\Contracts;

interface JobVacancyRepository
{
    public function store($request);

    public function getAll();
}
