<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

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
        $users = User::all();

        return view('posts.create',[
            'users' => $users,
        ]);
    }

    public function store()
    {
        //get the request data
        $data = request()->all(); //== $_POST

        //store the request data into the db
        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
            // 'test' => 'some value',
            // 'test2' => 'another value',
            // 'id' => 300,
        ]);

        //redirection to /posts
        return to_route('posts.index');
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
