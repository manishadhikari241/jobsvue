<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobsCategory;
use App\Model\Category;
use App\Repositories\Eloquent\EloquentJobsCategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    protected $category;

    public function __construct(EloquentJobsCategoryRepository $category)
    {
        parent::__construct();
        $this->category = $category;
    }

    public function index()
    {
        $category = Category::all();
        foreach ($category as $cat) {
            $cat->parent_id = Category::where('id', $cat->parent_id)->first() ? Category::where('id', $cat->parent_id)->first()->category_name : '-';
        }

        return response()->json([
            'status' => 'success',
            'category' => $category
        ], 200);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('pl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobsCategory $request)
    {

        try {
            dd('p');
            $this->category->store($request);

        } catch (\Exception $exception) {
            throw new  \PDOException('Error in saving Category' . $exception->getMessage());
        } finally {
            return response()->json([
                'status' => 'success',
                'message' => 'Category Successfully Added'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findorfail($id);
        $categories = Category::whereNotIn('id', [$category->id])->get();
        $parent_category = Category::where('id', $category->parent_id)->first();

        if ($parent_category == null) {

        }
        return response()->json([
            'category' => $category,
            'categories' => $categories,
            'parent_category' => $parent_category
        ], 200);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|min:2|max:20|unique:categories,category_name,' . $id
        ]);
        try {
            $this->category->update_product($request, $id);

        } catch (\Exception $exception) {
            throw new  \PDOException('Error in updating Category' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Updated Successfully',
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = Category::findorfail($id);
        if (Category::where('parent_id', $find->id)->first()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Delete your Child Category First'
            ], 403);
        }
        $find->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully Deleted'
        ], 200);

    }
}
