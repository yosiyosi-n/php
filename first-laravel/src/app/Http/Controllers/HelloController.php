<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index()
    {
        $item = [
            'room' => 200,
            'id' => 3
        ];
        return view('hello', $item);
    }
}
