<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
        $num = 11;
        $str = 'Hello';
        $mas = [1,3,8,-5];
        return view('second',compact('num','str','mas'));
    }
}
