<?php

namespace App\Http\Controllers;

Use Str;
Use Hash;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $req)
    {
        // $attributes = request()->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        // if (! auth()->attempt($attributes)) {
        //     throw ValidationException::withMessages([
        //         'email' => 'Your provided credentials could not be verified.'
        //     ]);
        // }

        // session()->regenerate();
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $req->email)->first();
        // dd(Hash::check($req->password, $user->password));
        // if user email found and password is correct
        if ($user && Hash::check($req->password, $user->password)) {
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            // $response = ['users' => $user, 'token' => $token];
            if($user->role==1){
            return redirect('/dashboard');
            }else{
                return ['message' => 'Ban Khong Co Quyen Truy Cap Trang Nay'];
            }
        }
        // $response = ['message' => 'Incorrect email or password'];
        return redirect('/sign-in');
    }

    public function show(){
        request()->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            request()->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);

    }

    public function update(){

        request()->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            request()->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => ($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/sign-in');
    }

}
