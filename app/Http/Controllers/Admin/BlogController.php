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
      $blogs=Blog::all();
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
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
