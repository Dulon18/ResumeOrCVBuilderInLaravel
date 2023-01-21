<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $resume=auth()->user();
       // dd($resume);
        return view('resume.index',compact('resume'));
    }

    public function download()
    {
        
        $resume=auth()->user();
        $pdf = Pdf::loadView('resume.index', compact('resume'));       
        return $pdf->download('resume.pdf');
    }
}
