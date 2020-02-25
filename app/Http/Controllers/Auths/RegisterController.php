<?php

namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Authentication\RegisterUser;
use App\Repositories\Contracts\LoginRegisterRepository;


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
