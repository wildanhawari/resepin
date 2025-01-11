<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        return view('front.index');
    }

    public function search() {
        return view('front.search');
    }

    public function bookmark() {
        return view('front.bookmark');
    }

    public function profile() {
        return view('front.profile');
    }

    public function category() {
        return view('front.category');
    }


}
