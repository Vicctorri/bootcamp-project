<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function save(Request $request){

//        if(Auth::check()){
//            return redirect(route('user.private'));
//        }
//        $validateFields = $request->validate([
//            'name'=> 'required',
//            'surname'=> 'required',
//            'birthdate'=> 'required',
//            'gender'=> 'required',
//            'address'=> 'required',
//            'email' => 'required|email',
//            'phone'=> 'required'
//
//        ]);
//        dd('Here');


//        if (Client::where('email', $validateFields['email'])->exists()){
//            return redirect(route('user.register'))->withErrors([
//                'email' => 'Register user'
//            ]);
//        }

//        $client = new static(
//
//                'name'=> 'required',
//                'surname'=> 'required',
//                'birthdate'=> 'required',
//                'gender'=> 'required',
//                'address'=> 'required',
//                'email' => 'required|email',
//                'phone'=> 'required'
//
//        );

//        $client->save();

//        $user = Client::create([
//            'name'=> 'required',
//            'surname'=> 'required',
//            'birthdate'=> $request['birthdate'],
//            'address'=> 'required',
//            'email' => 'required|email',
//            'phone'=> 123
//            ]);

        $user = User::create([
            'name'=> $request['name'],
            'email'=> $request['email'],
            'password'=> Hash::make($request['phone']),
        ]);

//        dd($client);
        if($user){
            Auth::login($user);
            return redirect(route('user.private'));
        }

//        return redirect(route('user.login'))->withErrors([
//            'formError' => 'User error'
//        ]);
    }
}
