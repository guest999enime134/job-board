<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
        function index(){
        //eloquent ORM->get all data
        $data = Tag::all();
        //pass data to view
        return view('tag.index',['tags'=>$data,"PageTitle"=>"Tags"]);
    }
    function create(Request $request){
        $data = $request->all();
        Tag::create($data);
        return redirect('/tags');
    }
    function test(){
        // $post2 =  Post::findOrFail(2);
        // $post2->tags()->attach([1,2]);
        // return response()->json(['post2'=>$post2->tags]);
        // $tag =Tag::findOrFail(2);
        // $tag->posts()->attach(2);
        // return response()->json([
        //     'tag'=>$tag->title,
        //     'posts'=>$tag->posts
        // ]);
    }
}
