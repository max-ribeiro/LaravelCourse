<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(int $p1, int $p2) {
        // Send an associative array
        // return view('site.test', [
        //     "p1" => $p1,
        //     "p2" => $p2
        // ]);

        //Creates an array based on var names ans literal indexes
        return view('site.test', compact('p1', 'p2'));

        //using the view method
        // return view('site.test')->with('p1', $p1)->with('p2', $p2);

    }
}
