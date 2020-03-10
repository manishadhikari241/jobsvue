<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Employer\EmployerIndustryRequest;
use App\Model\EmployerIndustry;
use App\Repositories\Eloquent\EloquentEmployerIndustryRepository;
use Illuminate\Http\Request;

class EmployerIndustryController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $industry;

    public function __construct(EloquentEmployerIndustryRepository $industry)
    {
        parent::__construct();
        $this->industry=$industry;
    }

    public function index()
    {
        $pack=$this->industry->getAll();

        return response()->json([
            'status' =>'success',
            'industry'=>$pack
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
    public function store(EmployerIndustryRequest $request)
    {
        try {
            $this->industry->store($request);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in saving Industry' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Industry Successfully Added'
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
        $pack=$this->industry->getbyId($id);

        return response()->json([
            'status' =>'success',
            'industry'=>$pack
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
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'industry_name'=>'required|unique:employer_industries,industry_name,'.$id.',industry_id',
            'status'=>'required|in:pending,publish'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                "errors" => $errors
            ],422);
        }
        try {
            $this->industry->update($request, $id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in updating industry' . $exception->getMessage());
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
            $this->industry->delete($id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in deleting industry' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Deleted successfully',
        ], 200);
    }
}
