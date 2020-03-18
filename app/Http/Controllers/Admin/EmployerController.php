<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Employer\EmployerRequest;
use App\Http\Resources\Employer;
use App\Repositories\Eloquent\EloquentEmployerRepository;
use Illuminate\Http\Request;

class EmployerController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $employer;

    public function __construct(EloquentEmployerRepository $employer)
    {
        parent::__construct();
        $this->employer=$employer;
    }

    public function index()
    {
        $employer=$this->employer->getAll();
//        return $employer;
        return Employer::collection($employer);
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
    public function store(EmployerRequest $request)
    {
        try {
            $this->employer->store($request);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in saving Employer' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Employer Successfully Added'
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
        $all=$this->employer->getbyId($id);

        return new Employer($all);
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
            'company_name'=>'required',
            'company_email'=>'required|email',
            'industry_id'=>'required|exists:employer_industries,industry_id',
            'city_id'=>'required|exists:cities,city_id',
            'location'=>'required',
            'primary_contact_no'=>'required',
            'secondary_contact_no'=>'required',
            'username'=>'required',
            'password'=>'required',
            'status'=>'required:in:pending,suspended,active',
            'logo'=>'required',
            'package_id'=>'required|exists:company_packages,packages_id',
            'package_activated'=>'required',
            'package_expired'=>'required',
            'viewed'=>'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                "errors" => $errors
            ],422);
        }
        try {
            $this->employer->update($request, $id);

        } catch (\Exception $exception) {
            throw new  \PDOException('Error in updating employer' . $exception->getMessage());
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
            $this->employer->delete($id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in deleting employer' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Deleted successfully',
        ], 200);
    }

}
