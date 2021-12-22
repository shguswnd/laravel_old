<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $books = [
            'harry poter',
            'laravel'
        ];
        return view('welcome', [
            'books' => $books
        ]);
        // return 'a';
    }

    public function hello(){
        return view('hello');
    }
    public function contact(){
        return view('contact');
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
}
