<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers;

use App\Http\Resources\PostResources;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controllers\Controller
{
    //
    use ApiResponse;

    public function register(Request $request)
    {
//        $request->validate([
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:6',
//        ]);
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        if ($validate->fails()) {
            return $this->apiResponse(null, $validate->errors(), 422);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        if ($user) {

//            $token=JWTAuth::fromUser($user);
            $success['token']=$user->createToken('MyApp')->accessToken;
            $success['name'] = $user->name;

            return $this->apiResponse($success); // this for make unique shape of response
//            $user =new PostResources($user);//this for normaliztion for Data
//            return $user;
        } else {
            return $this->apiResponse(null, 'something wrong happen', 404);
        }

    }

    public function login(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required',
        ]);
        if ($validate->fails()) {
            return $this->apiResponse(null, $validate->errors(), 422);
        }
        $credentials=$request->only('email','password');
        try{
            if(! $token = JWTAuth::attempt($credentials))
            {
                return $this->apiResponse(null, $validate->errors(), 422);
            }
        }catch (JWTException $e)
        {
            return response()->json(['error','invalid username and password']);
        }
        return response()->json($token);

    }
    public function services()
    {
//        $service=new PostResources(Service::find($id));
        ///for make pagination handlly
//        $offset= request()->has('offset') ? request()->get('offset') : 0;
//        $services= PostResources(Service::limit(10)->offset($offset)->get());
        //use pagination of laravel
//        $services = new PostResources(Service::paginate(10));
        return response()->json($services);
    }
}
