<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function greet()
    {
        $name = "Developer";
        return view('greeting', ['name' => $name]);
    }
}
