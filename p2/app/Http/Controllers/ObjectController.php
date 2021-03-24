<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ObjectController extends Controller
{
    /**
     * Show all objects
     *
     */
    public function index(){

        # Load our book data using PHP's file_get_contents
        # We specify our books.json file path using Laravel's database_path helper
        $objectData = file_get_contents(database_path('objects.json'));

        # Convert the string of JSON text we loaded from books.json into an
        # array using PHP's built-in json_decode function
        $objects = json_decode($objectData, true);

        # Alphabetize the books
        $objects = Arr::sort($objects, function ($value) {
            return $value['name'];
        });

        return view('objects/index', ['objects' => $objects]);

    }

    /**
     * GET /objects/{slug}
     * Show an object
     *
     */
    public function show( $slug ){
        $objectData = file_get_contents(database_path('objects.json'));
        $objects = json_decode($objectData, true);
        $object = $objects[ $slug ] ?? null;

        return view('objects/show', [
            'object' => $object
        ]);
    }

    /**
     * Find an object from form submission
     *
     */
    public function findObject(Request $request){
        $objectData = file_get_contents(database_path('objects.json'));
        $objects = json_decode($objectData, true);

        if( null !== $request->input('searchObjects') ){
            // if key exist redirect to the object page otherwise return 404.
            return isset($objects[$request->input('searchObjects')]) ? redirect('/objects/' . $request->input('searchObjects')) : view('objects/404');
        }

        $searchResults = [];

        foreach( $objects as $slug => $object) {
            if ( in_array($request->input('type'), $object['types'] ) ){
                $searchResults[ $slug ] = $object;
            }
        }
        $resultObject = ! empty( $searchResults ) ? $searchResults[array_rand( $searchResults )] : null;

        // Return a random item if the search results array is not empty.
        return ! is_null( $resultObject ) ? redirect('/objects/' . $resultObject['id'] )->with(['hideInfo' => $request->has('hideInfo')]) : view('objects/404');
    }

    /**
     * Form page
     *
     */
    public function play(){
        return view('objects/play');
    }

    /**
     * 404 page
     *
     */
    public function notFound(){
        return view('objects/404');
    }
}
