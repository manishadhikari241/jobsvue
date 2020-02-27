<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey='blog_id';

    protected $fillable=['blog_title','blog_category_id','blog_description','status'];

    public function categories()
    {
        return $this->belongsTo('App\Model\BlogCategory','blog_category_id');
    }
}
