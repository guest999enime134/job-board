<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        //eloquent ORM->get all data
        $data = Post::cursorPaginate(5);
        //pass data to view
        return view('post.index',['posts'=>$data,"PageTitle"=>"blog"]);
    }
    function create(){
        Post::factory(100)->create();
        return redirect('/blog');
    }
    function show($id){
        $post = Post::findOrFail($id);
        return view('post.show',['post'=>$post,"PageTitle"=>$post->title]);
    }
    function delete(){
        Post::destroy(1);
    }
}
