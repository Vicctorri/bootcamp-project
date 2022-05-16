<?php

namespace App\Http\Controllers;

use App\Http\Request\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Mail\Message;
use App\Services\ContactUsMailer;

class ContactController extends Controller
{
    public function index(){
        return view('home.contact');
    }

    public function send(ContactRequest $request, ContactUsMailer $mailer):RedirectResponse
    {

        $data = $request->validated();
        \Log::debug( 'test', $data);

        $mailer ->send($data);

        return redirect()->route('contact')->withInput($data);
    }
}

