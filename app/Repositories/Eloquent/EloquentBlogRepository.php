<?php

namespace App\Repositories\Eloquent;

use App\Blog;
use App\Repositories\Contracts\BlogRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentBlogRepository extends AbstractRepository implements BlogRepository
{
    public function entity()
    {
        return \App\Model\Blog::class;
    }

    public function getAll()
    {

        $blog=$this->entity()::all()->first()->categories;
        dd($blog);
        return $blog;
    }

    public function getbyId($id)
    {
        $blog=$this->entity()::find($id);
        return $blog;
    }

    public function store($request)
    {
//        dd($request->all());
        $data['blog_title']=$request->blog_title;
        $data['blog_category_id']=$request->blog_category_id;
        $data['blog_description']=$request->blog_description;
        $data['status']=$request->status;
        $create=$this->entity()::create($data);
        return $create;

    }
}
