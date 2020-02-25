<?php

namespace App\Repositories\Contracts;

interface JoblevelRepository
{
    public function getAll();

    public function store($request);

    public function update_joblevel($request, $id);

    public function delete_joblevel($id);

}
