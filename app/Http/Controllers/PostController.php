<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //select * from posts where title = 'CSS';
        // $filteredPosts = Post::where('title', 'CSS')->get();
        // dd($filteredPosts);

        $posts = Post::all(); //select * from posts;

        // dd($posts);
        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        return 'we are in store';
    }

    public function show($postId)
    {
        // SELECT * from posts where id = 'postId';
        // $post = Post::where('id', $postId)->first();
        $post = Post::find($postId);
        dd($post);
        return $postId;
    }
}
