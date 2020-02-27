<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\BlogCategoryRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentBlogCategoryRepository extends AbstractRepository implements BlogCategoryRepository
{
    public function entity()
    {
        return \App\Model\BlogCategory::class;
    }

    public function getAll()
    {
        $category=$this->entity()::all();
        return $category;
    }

    public function getbyId($id)
    {
        $category=$this->entity()::find($id);
        return $category;
    }

    public function store($request)
    {
        $data['blog_category_name']=$request->blog_category_name;
        $data['status']=$request->status;
        $create=$this->entity()::create($data);
        return $create;
    }

    public function update($request,$id)
    {
        $find=$this->entity()::find($id);
        $data['blog_category_name']=$request->blog_category_name;
        $data['status']=$request->status;
        $update=$find->update($data);
        return $update;
    }

    public function delete($id)
    {
        $find=$this->entity()::find($id);
        $del=$find->delete();
        return $del;
    }
}
