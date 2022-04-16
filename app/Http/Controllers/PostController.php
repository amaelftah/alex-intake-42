<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allNames = ['ahmed', 'mohamed', 'ali'];

        return view('posts.index',[
            'names' => $allNames,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }
}
