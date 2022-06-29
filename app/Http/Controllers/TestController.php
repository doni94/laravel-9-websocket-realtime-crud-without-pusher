<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $message = $firstname . ',' . $lastname;

        return event(new \App\Events\NewTrade($message));
    }
}
