<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class ResumeController extends Controller
{
    public function index()
    {
        $resume=auth()->user();
       // dd($resume);
        return view('resume.index',compact('resume'));
    }

    // public function download()
    // {
    //     $resume=auth()->user();
    //     $pdf = Pdf::loadView('resume.index', $resume);
    //     return $pdf->download('resume.pdf');
    // }
}
