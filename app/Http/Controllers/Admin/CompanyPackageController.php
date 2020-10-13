z<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Company\CompanyPackageRequest;
use App\Repositories\Eloquent\EloquentCompanyPackageRepository;
use Illuminate\Http\Request;

class CompanyPackageController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $package;

    public function __construct(EloquentCompanyPackageRepository $package)
    {
        parent::__construct();
        $this->package = $package;
    }

    public function index()
    {
        $pack = $this->package->getAll();

        return response()->json([
            'status' => 'success',
            'company_package' => $pack
        ], 200);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyPackageRequest $request)
    {
        try {
            $this->package->store($request);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in saving Package' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Package Successfully Added'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pack = $this->package->getById($id);

        return response()->json([
            'status' => 'success',
            'company_package' => $pack
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'package_name' => 'required|unique:company_packages,package_name,' . $id . ',packages_id',
            'price' => 'required',
            'duration' => 'required|in:monthly,yearly',
            'features' => 'required',
            'status' => 'required|in:pending,publish'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                "errors" => $errors
            ], 422);
        }
        try {
            $this->package->update($request, $id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in updating company package' . $exception->getMessage());
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
        try {
            $this->package->delete($id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in deleting package' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Deleted successfully',
        ], 200);
    }
}
