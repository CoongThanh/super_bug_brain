<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
 use App\Http\Controllers\Validator;
class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $req){
        // $attributes = request()->validate([
        //     'name' => 'required|max:255|unique:users',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => 'required|min:6|max:255',
        //     // 'role'=>1,
        //     // 'status'=>1
        // ]);
       
        // $user = User::create($attributes);

        // auth()->login($user);
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6'
        ];
        
        
        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'role'=> 1,
            'status'=> 1
        ]);
        
        $user->save();
        $token = $user->createToken('Personal Access Token')->plainTextToken;
        return redirect('/sign-in');
    }
}