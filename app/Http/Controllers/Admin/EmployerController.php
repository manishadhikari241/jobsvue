<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Employer;
use App\Repositories\Eloquent\EloquentEmployerRepository;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Parent_;

final class EmployerController extends DashboardController
{
    protected $employer;

    public function __construct(EloquentEmployerRepository $employer)
    {
        parent::__construct();
        $this->employer = $employer;
    }

    public function index(Request $request)
    {
        try {
            $employer = $this->employer->getAll();
        } catch (\Exception $e) {
            throw new \PDOException('Error' . $e->getMessage());
        }
        $this->data('employers', $employer);
        return view($this->employer_path . 'index', $this->data);
    }
}
