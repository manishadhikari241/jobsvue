<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blogs\BlogRequest;
use App\Model\Blog;
use App\Repositories\Eloquent\EloquentBlogRepository;
use Illuminate\Http\Request;

class BlogController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $blog;

    public function __construct(EloquentBlogRepository $blog)
    {
        parent::__construct();
        $this->blog=$blog;
    }

    public function index()
    {
      $blogs=$this->blog->all();
       return new \App\Http\Resources\Blog($blogs);
//        return response()->json([
//           'status'=>'success',
//           'blogs'=>$blogs
//        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        try {
            $this->blog->store($request);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in saving Blog' . $exception->getMessage());
        }
            return response()->json([
                'status' => 'success',
                'message' => 'Blog Successfully Added'
            ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

        $blog=$this->blog->getbyId($id);

        return new \App\Http\Resources\Blog($blog);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'blog_title'=>'required|unique:blogs,blog_title','.$id.','blog_id',
            'blog_category_id'=>'required|exists:blog_categories,blog_category_id',
            'blog_description'=>'required',
            'status'=>'required'
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                "errors" => $errors
            ],422);
        }
        try {
            $this->blog->update($request, $id);

        } catch (\Exception $exception) {
            throw new  \PDOException('Error in updating Blogs' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Updated Successfully',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->blog->delete($id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in deleting Joblevel' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Deleted successfully',
        ], 200);
    }

}
