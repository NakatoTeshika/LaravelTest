<?php


namespace App\Http\Controllers;


class HelloWorldController extends Controller
{
    public function getHelloWorld()
    {
        return view('helloWorld');
    }
}
