<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function index(){
        //eloquent ORM->get all data
        $data = Comment::cursorPaginate(10);
        //pass data to view
        return view('comment.index',['comments'=>$data,"PageTitle"=>"blog"]);
    }
    function show($id){
        $comment = Comment::findOrFail($id);
        return view('comment.show',['comment'=>$comment,"PageTitle"=>$comment->title]);
    }
        function create(){
            Comment::factory(5)->create();
            return redirect('/comments');
    }
}
