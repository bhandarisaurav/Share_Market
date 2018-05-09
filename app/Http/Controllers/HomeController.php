<?php

namespace App\Http\Controllers;

use App\Share;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('home');
        $shares = Share::all();

        // load the view and pass the nerds
        return View('shares.index')->with('shares', $shares);
    }
}
