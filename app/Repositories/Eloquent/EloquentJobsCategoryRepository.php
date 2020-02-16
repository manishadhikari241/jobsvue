<?php

namespace App\Repositories\Eloquent;

use App\JobsCategory;
use App\Model\Category;
use App\Repositories\Contracts\JobsCategoryRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentJobsCategoryRepository extends AbstractRepository implements JobsCategoryRepository
{
    public function entity()
    {
        return Category::class;
    }

    public function store($request)
    {
        $data['category_name'] = $request->category_name;
        $data['parent_id'] = $request->parent_id == null ? 0 : $request->parent_id;
        $data['status'] = $request->status;
        $create = Category::create($data);
        return $create;
    }

    public function update_product($request, $id)
    {
        $find = $this->entity()::findorfail($id);
        $data['category_name'] = $request->category_name;
        $data['parent_id'] = $request->parent_id == null ? 0 : $request->parent_id;
        $data['status'] = $request->status;
        $update = $find->update($data);
        return $update;
    }
}
