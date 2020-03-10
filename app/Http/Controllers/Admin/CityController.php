<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Company\CityRequest;
use App\Repositories\Eloquent\EloquentCityRepository;
use Illuminate\Http\Request;

class CityController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $city;

    public function __construct(EloquentCityRepository $city)
    {
        parent::__construct();
        $this->city=$city;
    }

    public function index()
    {
        $pack=$this->city->getAll();

        return response()->json([
            'status' =>'success',
            'city'=>$pack
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
    public function store(CityRequest $request)
    {
        try {
            $this->city->store($request);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in saving City' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'City Successfully Added'
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
        $pack=$this->city->getbyId($id);

        return response()->json([
            'status' =>'success',
            'city'=>$pack
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
            'city_name'=>'required|unique:cities,city_name,'.$id.',city_id',
            'zip_code'=>'required',
            'status'=>'required|in:pending,publish'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                "errors" => $errors
            ],422);
        }
        try {
            $this->city->update($request, $id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in updating city' . $exception->getMessage());
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
            $this->city->delete($id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in deleting city' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Deleted successfully',
        ], 200);
    }
}
