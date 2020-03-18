<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Jobs\CurrencyRequest;
use App\Repositories\Eloquent\EloquentCurrencyRepository;
use Illuminate\Http\Request;

class CurrencyController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $currency;

    public function __construct(EloquentCurrencyRepository $currency)
    {
        parent::__construct();
        $this->currency=$currency;
    }

    public function index()
    {
        $all=$this->currency->getAll();

        return response()->json([
            'currency'=>$all,
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
    public function store(CurrencyRequest $request)
    {
        try {
            $this->currency->store($request);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in saving currency' . $exception->getMessage());
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
        $all=$this->currency->getbyId($id);

        return response()->json([
            'currency'=>$all,
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
            'currency_name'=>'required|unique:currencies,currency_name,'.$id.',currency_id',
            'currency_symbol'=>'required|unique:currencies,currency_symbol,'.$id.',currency_id',
            'status'=>'required|in:pending,publish',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                "errors" => $errors
            ],422);
        }
        try {
            $this->currency->update($request, $id);

        } catch (\Exception $exception) {
            throw new  \PDOException('Error in updating currency' . $exception->getMessage());
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
            $this->currency->delete($id);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in deleting currency' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Deleted successfully',
        ], 200);
    }
}
