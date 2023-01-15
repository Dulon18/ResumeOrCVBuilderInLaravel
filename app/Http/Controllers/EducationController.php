<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{

    public function index()
    {
        $education=auth()->user()->education;
        //dd($education);
        return view('education.index',compact('education'));
    }

 
    public function create()
    {
        return view('education.create');
    }


    public function store(Request $request)
    {
            $request->validate([
                "college_name" =>'required',
                "college_location" =>'required',
                "field_of_study" =>'required',
                "degree" =>'required',
                "cgpa" =>'required',
                "graduation_start_year" =>'required',
                "graduation_end_year" =>'required',
            ]);

            //dd($request);

            Education::create([
            "user_id"=>auth()->id(),
            "college_name" =>$request->name,
            "college_location" =>$request->location,
            "field_of_study" =>$request->feild_of_study,
            "degree" =>$request->degree,
            "cgpa" =>$request->cgpa,
            "graduation_start_year" =>$request->s_year,
            "graduation_end_year" =>$request->e_year,
        ]);
        return redirect()->back();
    }


    public function show(Education $education)
    {
        //
    }

 
    public function edit(Education $education)
    {
        //$education=Education::find($id);
        return view('education.edit',compact('education'));
    }


    public function update(Request $request, Education $education)
    {
        //
    }

    public function destroy(Education $education)
    {
        //
    }
}
