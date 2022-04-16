<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testAction()
    {
        $allNames = ['ahmed', 'mohamed', 'ali'];

        return view('test',[
            'names' => $allNames,
        ]);
    }
}
