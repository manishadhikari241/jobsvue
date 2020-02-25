<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Jobs\JoblevelRequest;
use App\Model\Joblevel;
use App\Repositories\Eloquent\EloquentJoblevelRepository;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JoblevelController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $level;

    public function __construct(EloquentJoblevelRepository $level)
    {
        parent::__construct();
        $this->level=$level;
    }

    public function index()
    {
        $job_level=$this->level->getAll();

        return response()->json([
           'status' =>'success',
            'job_level'=>$job_level
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
    public function store(JoblevelRequest $request)
    {

        try {
            $this->level->store($request);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in saving Joblevel' . $exception->getMessage());
        } finally {
            return response()->json([
                'status' => 'success',
                'message' => 'Job level Successfully Added'
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
            Rule::unique('joblevels')->ignore($id),
            'job_level'=>'required',
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
                $this->level->update_joblevel($request, $id);

            } catch (\Exception $exception) {
                throw new  \PDOException('Error in updating Joblevel' . $exception->getMessage());
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
            $this->level->delete_joblevel($id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in deleting Joblevel' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Deleted successfully',
        ], 200);
    }
}
