<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //This returns the master layout view
    public function master()
    {
      return view('layouts.master');
    }

    //index page
    public function index()
    {
      return view('welcome');

    }

    //help page
    public function help()
    {
      return view('who_help');
    }
    //our campaign page
    public function campaign()
    {
      return view('our_campaign');
    }

    //our campaign page
    public function how_to_help()
    {
      return view('how');
    }

    //feedback page
    public function feedback()
    {
      return view('feedback');
    }
    //login and registration form
    public function login()
    {
      return view('login');
    }
}
