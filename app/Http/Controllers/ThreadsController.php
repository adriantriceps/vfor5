<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    //web.php ThreadsController@index fer í þetta Index
    public function index()
    {
      $message = "This is the Threads index view";

      return $message;
    }
}
