<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){

        if (Auth::check()){
            return redirect()->intended(route('user.private'));
        }

//        $formFields = $request->only(['email', 'phone']);

        $formFields = [
            'email' => 'emai3@mail.com',
//            'email' => $request['email'],
//            'password' => Hash::make($request['password'])
            'password' => \Hash::make('123')
        ];

//        dd($formFields);

//        Auth::attempt($formFields);

        if (Auth::attempt($formFields)){
            return redirect()->intended(route('user.private'));
        } else {
            dd('Here');
        }
        return redirect(route('user.login'))->withErrors([
            'formError' => 'User error'
        ]);

        return view('login.login');
    }
}
