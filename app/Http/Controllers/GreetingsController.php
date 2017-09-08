<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    //web.php ThreadsController@index fer í þetta Index
    public function index()
    {
      $message = "Adrian";

      return view('greetings.greetings', compact('message'));
    }

    public function hello()
    {
      $name = "Adrian";

      return view('greetings.hello', compact('name'));
    }
}
