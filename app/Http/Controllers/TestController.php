<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $message = $firstname . ',' . $lastname;

        $test = new Test;
 
        $test->firstname = $firstname;
        $test->lastname = $lastname;
 
        $test->save();

        return event(new \App\Events\NewTrade($message));
    }
}
