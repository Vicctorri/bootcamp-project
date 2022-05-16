<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactTestController extends Controller
{

    public function showContact() {
        return view('testcontact');
    }

    public function sendContact() {
        return redirect()->route('showContact');
    }
}
