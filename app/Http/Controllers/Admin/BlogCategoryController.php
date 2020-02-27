<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blogs\BlogCategoryRequest;
use App\Repositories\Eloquent\EloquentBlogCategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BlogCategoryController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $category;

    public function __construct(EloquentBlogCategoryRepository $category)
    {
        parent::__construct();
        $this->category=$category;
    }

    public function index()
    {
        $index=$this->category->getAll();
        return response()->json([
           'status'=>'success',
           'blog_category'=>$index,
        ],200);
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
    public function store(BlogCategoryRequest $request)
    {
        try{
            $this->category->store($request);
        }
        catch (\Exception $exception) {
            throw new  \PDOException('Error in saving BlogCategory' . $exception->getMessage());
        } finally {
            return response()->json([
                'status' => 'success',
                'message' => 'Blog Category Successfully Added'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog_category=$this->category->getbyId($id);

        return response()->json([
            'status'=>'success',
            'blog_category'=>$blog_category,
        ],200);
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
        $validator=Validator::make($request->all(),[
            'blog_category_name'=>'required|unique:blog_categories,blog_category_name,'.$id.',blog_category_id',
            'status'=>'required'
        ]);
        if ($validator->fails())
        {
            $errors=$validator->errors()->all();
            return response()->json([
               'errors'=>$errors,
            ],422);
        }
        try{
            $this->category->update($request,$id);
        }
        catch (\Exception $exception)
        {
            throw new \PDOException('Error in updating BlogCategory'.$exception->getMessage());
        }
        return response()->json([
           'status'=>'success',
           'message'=>'updated successfully',
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $this->category->delete($id);
        }
        catch (\Exception $exception)
        {
            throw new \PDOException('Error in deleting BlogCategory'.$exception->getMessage());
        }
        return response()->json([
            'status'=>'success',
            'message'=>'deleted successfully',
        ],200);
    }
}
