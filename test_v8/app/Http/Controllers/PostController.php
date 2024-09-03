<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Str;
class PostController extends Controller
{
    // display records
    public function index(){
        // $posts = POST::get();
        // $posts = POST::get()->count();
        // $posts = POST::all();
        // $posts = POST::where('id',1)->get();
        $posts = POST::all()->where('id',1);
        dd($posts);
    }
    
    // display single record
    public function show($id){
        $posts = POST::find($id);
        // $posts = post::findOrFail($id);
        dd($posts);
    }

    //update record
    public function update($id){
        // // way 1
        // $post = POST::find($id);
        // $post->title = "update title";
        // $post->body="update body";
        // $post->save();

        // way 2
        POST::where(id,$id)->update([
            'title'=>'new title',
            'body'=>'new body',
        ]);
    } 

    // delete record
    public function destory($id){
        $post = POST::find($id);
        $post->delete();
    }

    // show first data
    public function getPost(){
        $post = POST::where('user_id',1)->first();
        return ($post);
    }

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
