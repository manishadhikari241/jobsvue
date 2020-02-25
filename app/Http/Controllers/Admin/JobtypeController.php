<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Jobs\JobtypeRequest;
use App\Model\Jobtype;
use App\Repositories\Eloquent\EloquentJobtypeRepository;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobtypeController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $type;

    public function __construct(EloquentJobtypeRepository $type)
    {
        parent::__construct();
        $this->type=$type;
    }

    public function index()
    {
        $job_type=$this->type->getAll();

        return response()->json([
            'status'=>'success',
            'job_type'=>$job_type,
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
    public function store(JobtypeRequest $request)
    {
        try{
            $this->type->store($request);
        }
        catch (\Exception $exception) {
            throw new  \PDOException('Error in saving Jobtype' . $exception->getMessage());
        } finally {
            return response()->json([
                'status' => 'success',
                'message' => 'Job type Successfully Added'
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
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            Rule::unique('jobtypes')->ignore($id),
        'job_type_name'=>'required',
            'status'=>'required'
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                "message" => "Validation Error",
                "title" => $errors
            ],422);
        }
        try {
            $this->type->update($request, $id);

        } catch (\Exception $exception) {
            throw new  \PDOException('Error in updating Jobtype' . $exception->getMessage());
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
            $this->type->delete($id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in deleting Jobtype' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Deleted successfully',
        ], 200);
    }
}
