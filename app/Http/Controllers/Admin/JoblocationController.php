<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Jobs\JoblocationRequest;
use App\Model\Joblocation;
use App\Repositories\Eloquent\EloquentJoblocationRepository;
use Illuminate\Http\Request;

class JoblocationController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $location;

    public function __construct(EloquentJoblocationRepository $location)
    {
        parent::__construct();
        $this->location=$location;
    }

    public function index()
    {
        $pack=$this->location->getAll();

        return response()->json([
            'job_location'=>$pack
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
    public function store(JoblocationRequest $request)
    {
        try {
            $this->location->store($request);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in saving Joblocation' . $exception->getMessage());
        } finally {
            return response()->json([
                'status' => 'success',
                'message' => 'Job location Successfully Added'
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
        $pack=$this->location->getbyId($id);

        return response()->json([
            'job_location'=>$pack
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
            'location_name'=>'required|unique:joblocations,location_name,'.$id.',location_id',
            'image'=>'required',
            'status'=>'required|in:pending,publish'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                "errors" => $errors
            ],422);
        }
        try {
            $this->location->update($request, $id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in updating job location' . $exception->getMessage());
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
            $this->location->delete($id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in deleting joblocation' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Deleted successfully',
        ], 200);
    }
}
