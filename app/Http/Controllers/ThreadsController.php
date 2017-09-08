<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    //web.php ThreadsController@index fer í þetta Index
    public function index()
    {
      $message = "This is the Threads index view";

      return view('threads.index', compact('message'));
    }

    public function create()
    {
      $message = "This is the Threads create view";
      return $message;
      //return view('threads.index', compact('message'));
    }

    public function four()
    {
      $message = "This is the Threads 4 view";
      return $message;
      //return view('threads.index', compact('message'));
    }

    public function id($id)
    {
      $message = "This is the Threads " . $id . " view.";

      return $message;

      //return view('threads.index', compact('message'));
    }
}
