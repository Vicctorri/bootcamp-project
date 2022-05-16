<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class LanguageController extends Controller
{
    /**
     * Write Your Code.
     *
     * @return string
     */

    public function index()
    {
        return view('home');

    }
    /**
     * Write Your Code..
     *
     * @return string
     */
    public function langChange(Request $request)
    {
        App::setLocale($request->home);
        session()->put('locale',$request->home);
        return redirect()->back();

    }

}
