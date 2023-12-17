<?php

namespace App\Services;

use App\Http\Requests\Auth\CheckRequest;
use App\Models\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthService extends BaseService
{
    public function __construct(Auth $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }

    final function register($request)
    {

        $request['password'] = bcrypt($request['password']);
        $request['role'] = 'user';
        $request['status'] = 'active';

        $user = User::create($request);
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'user' => $user,
            'token' => $token
        ], 200);

    }


    final function me($request){
        return response()->json($request->user(),200);
    }


    final function login($request)
    {
        $user = User::where('username', $request['username'])->first();
        if (!$user || !Hash::check($request['password'], $user->password)) {
            return response()->json([
                'message' => 'The provided credentials are incorrect.'
            ], 401);
        }
        $token = $user->createToken('auth_token',[$user->role ?? '*'],now()->addSeconds(5))->plainTextToken;
        return response()->json([
            'user' => $user,
            'token' => $token
        ], 200);
    }
}
