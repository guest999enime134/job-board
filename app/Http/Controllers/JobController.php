<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobController extends Controller
{
    function index(){
        $jobs = Job::all();
        return view("job.index",['jobs'=>$jobs,"name"=>"khalid"]);
    }
}
