<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('/pages/home');
    }

    public function profile() {
        return view('/pages/profile');
    }

    public function notFound() {
        return view('/pages/404');
    }
}
