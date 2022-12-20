<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\CanResetPassword;

class AuthController extends Controller
{
    public function register(Request $req)
    {
        //valdiate
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6'
        ];
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //create new user in users table
        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'point'=> 200,
            'ranker' => '0',
            'role'=> 0,
            'status'=> 1
        ]);
        
        $user->save();
        $token = $user->createToken('Personal Access Token')->plainTextToken;
        $response = ['users' => $user, 'token' => $token];
        return response()->json($response, 200);
    }

    public function login(Request $req)
    {
        // validate inputs
        $rules = [
            'email' => 'required',
            'password' => 'required|string'
        ];
        $req->validate($rules);
        // find user email in users table
        $user = User::where('email', $req->email)->first();
        // dd($user && Hash::check($req->password, $user->password));
        // if user email found and password is correct
        if ($user && Hash::check($req->password, $user->password)) {
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $response = ['users' => $user, 'token' => $token];
            return response()->json($response, 200);
        }
        $response = ['message' => 'Sai email hoặc mật khẩu'];
        return response()->json($response, 400);
    }
    public function updateuser(Request $request)
    {
        try {
            $user = new User();
            $id = $request->get('id');
            $data = $user->getById($id)[0];
            $data->point = $request->get('point');
            $user->updateUserName($data);
            

            return response()->json([
                'status' => 200,
                'data' => $data,
                
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 500,
                "message" => "update failed!"
            ], 500);
        }
    }
   

    
}
