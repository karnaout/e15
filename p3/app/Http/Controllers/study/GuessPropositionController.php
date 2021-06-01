<?php

namespace App\Http\Controllers\study;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuessPropositionController extends Controller
{
    public function index() {
        return view('/study/guess-proposition/index');
    }
}
