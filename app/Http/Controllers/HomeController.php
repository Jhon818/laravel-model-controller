<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $name = 'Paolo';
       
        return view('home', compact('name'));
    }

    public function about() {
        return view('about');
    }

    public function contacts() {
        return view('contacts');
    }
}