<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TEST extends Controller
{
    //

    public function index()
    {
                $books = [
            'harry poter',
            'laravel'
        ];
        return view('welcome', [
            'books' => $books
        ]);
    }
}
