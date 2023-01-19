<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resume=auth()->user();
       // dd($resume);
        return view('resume.index',compact('resume'));
    }
}
