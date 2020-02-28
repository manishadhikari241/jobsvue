<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Blog extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
             'blog_id'=>$this->blog_id,
            'blog_title'=>$this->blog_title,
            'blog_category'=>$this->categories,
            'blog_description'=>$this->blog_description,
            'status'=>$this->status
        ];
    }
}
