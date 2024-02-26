<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
  public function LogIn(LoginRequest $request) {
        $credentials = $request->validated();
        // if(Auth::attempt(['username'=> $credentials['username'],'password'=>$credentials['password']])){
        //     return response(['message'=>"Provided username or password is incorrect"],422);
        // }
        $user = User::whereUsername($credentials['username'])->first();
        if(!$user || !Hash::check($credentials['password'],$user->password)){
            return response(['message'=>"Provided username or password is incorrect"],422);
        }
        else {
            if(Hash::check($credentials['password'],$user->password)){
                $fullname = $user->fullname;
                $token = $user->createToken('auth_token')->plainTextToken;

                return compact('token','fullname');
            }

        }





        // $user = Auth::user();
        // $token = $user->createToken('auth_token')->plainTextToken;
        // return response(['user'=>$user,'token'=>$token]);
            return response($user);

  }

  public function Register(Request $request){

  }
}
