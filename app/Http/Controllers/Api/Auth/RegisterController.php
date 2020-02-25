<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\RegisterUser;
use App\Repositories\Contracts\LoginRegisterRepository;
use App\Repositories\Eloquent\EloquentLoginRegisterRepository;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $loginRegister = '';

    public function __construct(LoginRegisterRepository $loginRegister)
    {
        $this->loginRegister = $loginRegister;
    }

    public function register(RegisterUser $request)
    {
        try {
            $save = $this->loginRegister->register($request);
        } catch (\Exception $e) {
            throw new \PDOException('Error in Registering Users' . $e->getMessage());
        }
        return response()->json($save);

    }

    public function login()
    {

    }

}
