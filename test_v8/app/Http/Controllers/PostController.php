<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Str;
class PostController extends Controller
{
    public function store(){
        // way 1
        // $post = new Post;
        // $post->title = "a new title";
        // $post->body = "a new body";
        // $post->slug = Str::slug($post->title);
        // // $post->user_id = auth()->user()->id;
        // $post->user_id = 1;
        // $post->save();

        // way 2
        Post::create([
            'title'=>$title ='this is a title',
            'body'=>'this is a body',
            'slug'=>Str::slug($title),
            'user_id'=>'1'

        ]);

    }
}
