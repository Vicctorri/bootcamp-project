<?php

namespace App\Http\Controllers;

use App\Http\Request\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Mail\Message;

class ContactController extends Controller
{
    public function index(){
        return view('home.contact');
    }

    public function send(ContactRequest $request):RedirectResponse
    {

        $data = $request->validated();
        \Log::debug( 'test', $data);

        \Mail::send('emails.contact',
            [
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'phonenumber' => $data['phonenumber'],
                'subject' => $data['subject'],
                'messageText' => $data['message'],
            ],
        
        function(Message $message) use ($data){ 
            $message->subject('mesage from ' . $data['email']);
            $message->to('library@gmail.com');
            $message->from('no-reply@library.app', 'ViLibrary');
        

        });


        return redirect()->route('contact')->withInput($data);
    }
}

