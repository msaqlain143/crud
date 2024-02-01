<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\AssignOp\Div;

class AuthController extends Controller
{
    //


    public function handleregisterationn(Request $request)
    {
        //dumy data
        // $name =  'test';
        // $email = 'test@gmail.com'
        // $password = 'test';
        // $confirm = 'test';

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $confirm = $request->confirm_password;

        $done = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role' => request()->role
        ]);

        if ($done) {
           return redirect('/loginP');
        } else {
            return redirect('/signup');
        }
    }

    public function handleLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            if(Auth::user()->role == 1){
            return redirect('/');
            }

            else{
                return "you are normal user ";
            }


        } else {
            return redirect()->route('login-form')->with('success', 'Invalid email or password, plz try again ! ');
        }
            // return back()->withInput()->withErrors(['login' => 'Invalid email or password.']);
    }
    // public function handlelogin()
    // {
    //     $email = 'email';
    //     $password = 'password';

    //    $done =  Auth::attempt(['email' => $email , 'password' => $password]);

    //    if($done){
    //     return back()->with('success' , 'Welcome To Dashboard');

    //    } else{
    //     return "sorry please check your credentails and try again ";
    //    }

    public function loginPage()
    {
        return view('loginSystem.login');
    }
    public function signupPage()
    {
        return view('loginSystem.signup');
    }
    public function dashboard()
    {
        return view('layouts.master');
    }
}
