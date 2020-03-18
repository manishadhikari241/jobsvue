<?php

namespace App\Repositories\Contracts;

interface CurrencyRepository
{
    public function store($request);

    public function getAll();
}
