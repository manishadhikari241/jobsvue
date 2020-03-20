<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Jobs\JobvacancyRequest;
use App\Http\Resources\Vacancy;
use App\Repositories\Eloquent\EloquentJobVacancyRepository;
use Illuminate\Http\Request;

class JobVacancyController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $vacancy;

    public function __construct(EloquentJobVacancyRepository $vacancy)
    {
        parent::__construct();
        $this->vacancy=$vacancy;
    }

    public function index()
    {
        $all=$this->vacancy->getAll();
          return Vacancy::collection($all);
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
    public function store(JobvacancyRequest $request)
    {
        try {
            $this->vacancy->store($request);
        } catch (\Exception $exception) {
            throw new  \PDOException('Error in saving vacancy' . $exception->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Job Vacancy Successfully Added'
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
