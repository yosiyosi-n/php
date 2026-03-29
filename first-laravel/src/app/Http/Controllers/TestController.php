<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(Request $request)
    {
        $item = [
            'content' => '本文',
            'a' => '当番'
        ];
        return view('index', $item);
    }
}
