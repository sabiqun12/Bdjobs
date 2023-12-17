<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Signup(){
        return view('auth.register');
    }

    public function SignupStore(UserRequest $request){
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)

    ]);
    // make a credentials array
    $credentials = [
        'email' => $request->email,
        'password' => $request->password,
    ];

    // login attempt if success then redirect home
    if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->route('loginpage');
    }

     }

    public function Login(){
        return view('auth.login');
    }

    public function LoginStore( Request $request){
        $validate = $request->validate([
            'email'=> 'required|email',
            'password' => 'required|string|min:4'
        ]);

        $credentials = [
           'email' => $request->email,
           'password' => $request->password,
    ];

    //login attempt if success then redirect dashboard
    if(Auth::attempt($credentials, $request->filled('remember'))){
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }

      // return error message
      return back()->withErrors([
        'email' => 'Wrong Credentials found!'
    ])->onlyInput('email');


     }


}
