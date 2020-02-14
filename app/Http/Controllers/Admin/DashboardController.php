<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends BackendController
{

    public function __construct()
    {
//        $this->middleware('auth:admin');
        parent::__construct();
    }

    public function dashboard()
    {
        return view($this->adminPath . 'dashboard');
    }
}
