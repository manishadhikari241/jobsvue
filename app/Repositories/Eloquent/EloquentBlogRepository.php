<?php

namespace App\Repositories\Eloquent;

use App\Blog;
use App\Repositories\Contracts\BlogRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentBlogRepository extends AbstractRepository implements BlogRepository
{
    public function entity()
    {
        return Blog::class;
    }
}
