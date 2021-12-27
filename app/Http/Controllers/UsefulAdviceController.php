<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsefulAdviceController extends Controller
{
    public function index(){
        return view('blog.useful_advice');
    }
}
