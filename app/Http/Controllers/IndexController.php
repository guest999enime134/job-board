<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
        return view("index",["PageTitle"=> "Main Page"]);
    }
        function about(){
        return view("about",["PageTitle"=> "About Page"]);
    }
        function contact(){
        return view("contact",["PageTitle"=> "Contact Page"]);
    }
}
