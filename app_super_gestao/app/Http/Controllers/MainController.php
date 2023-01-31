<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show() {
        echo 'Hello World!';
    }

    public function showContact() {
        echo 'Hello World! contact Us!';
    }

    public function showAbout() {
        echo 'Hello World! know about us!';
    }
}
