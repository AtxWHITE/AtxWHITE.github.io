<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index'); //ini yang diubah
    }
    public function adminHome()
    {
        $user = auth()->user();
        // dd('admin');
        return view('backend.index');
    }
    public function terapisHome()
    {
        $user = auth()->user();
        // dd('admin');
        return view('home');
    }
}
