<?php

namespace App\Repositories\Eloquent;

use App\Model\User;
use App\Repositories\Contracts\LoginRegisterRepository;

use Illuminate\Support\Facades\DB;
use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;
use GuzzleHttp;

class EloquentLoginRegisterRepository extends AbstractRepository implements LoginRegisterRepository
{
    public function entity()
    {
        return User::class;
    }

    public function register($request)
    {
        $user = new User();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->verified = 0;
        $user->password = bcrypt($request->password);
        $user->save();
//        dd($user);

        $http = new GuzzleHttp\Client;

        $response = $http->post(url('oauth/token'), [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => DB::table('oauth_clients')->where('id','=',2)->first()->secret,
                'username' => $request->email,
                'password' => $request->password,
                'scope' => '',
            ],
        ]);


        return json_decode((string)$response->getBody(), true);

    }
}
