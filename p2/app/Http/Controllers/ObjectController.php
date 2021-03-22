<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectController extends Controller
{
    public function index(){
        return view('objects/index');
    }

    public function show( $objectName ){
        return view('objects/show', [
            'objectName' => $objectName
        ]);
    }
}
