<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{

    protected $adminPath = 'admin.';
    protected $category_path = '';
    protected $setting_path = '';
    protected $employer_path='';


    public function __construct()
    {
        $this->category_path = $this->adminPath . 'category' . '.';
        $this->setting_path = $this->adminPath . 'settings' . '.';
        $this->employer_path = $this->adminPath . 'employer' . '.';
    }
}
