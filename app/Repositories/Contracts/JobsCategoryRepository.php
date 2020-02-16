<?php

namespace App\Repositories\Contracts;

interface JobsCategoryRepository
{
    public function store($request);

    public function update_product($request, $id);

}
