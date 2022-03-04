<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {

        return view('home', [
            'page' => 'home',
        ]);
    }

    public function tools() {

        return view('tools', [
            'page' => 'tools',
        ]);
    }
}
