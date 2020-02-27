<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $primaryKey='blog_category_id';

    protected $fillable=['blog_category_name','status'];

    public function blogs()
    {
        return $this->hasMany('App\Model\Blog','blog_id');
    }
}
