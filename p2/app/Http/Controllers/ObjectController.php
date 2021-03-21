<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectController extends Controller
{
    public function index(){
        return 'Objects index function';
    }

    public function show( $objectName ){
        return 'show object' . $objectName;
    }
}
