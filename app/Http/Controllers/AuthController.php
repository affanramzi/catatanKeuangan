<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\User as UserResource;
use App\Http\Requests\ValidateUserRegistration;
use App\Http\Requests\ValidateUserLogin;
use App\Models\user as ModelsUser;
use App\Models\user;
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }
    public function register(ValidateUserRegistration $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return new UserResource($user);
    }
    public function login(ValidateUserLogin $request){

        $credentials = request(['email', 'password']);
        if (!$token = auth()->user) {
            return  response()->json([
                'errors' => [
                    'msg' => ['Incorrect username or password.']
                ]
            ], 401);
        }

        return response()->json([
            'type' =>'success',
            'message' => 'Logged in.',
            'token' => $token
        ]);
    }

    public function user()
    {
       return new UserResource(auth()->user());
    }
}
