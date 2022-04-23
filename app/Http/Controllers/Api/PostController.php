<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return PostResource::collection($posts);
    }

    public function show($postId)
    {
        $post = Post::find($postId);

        return new PostResource($post);
        // return [
        //     'id' => $post->id,
        //     'title' => $post->title,
        //     'description' => $post->description,
        //     'user_id' => $post->user_id,
        // ];
    }

    public function store(StorePostRequest $request)
    {
        $data = request()->all();

          //store the request data into the db
          $post = Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
            // 'test' => 'some value',
            // 'test2' => 'another value',
            // 'id' => 300,
        ]);

        return new PostResource($post);
    }
}
