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
            // $request->validate([
            //     "graduation_college_name" =>'required',
            //     "graduation_college_location" =>'required',
            //     "graduation_field_of_study" =>'required',
            //     "graduation_cgpa" =>'required',
            //     "graduation_college_start_year" =>'required',
            //     "graduation_college_end_year" =>'required',
    
            //     "hsc_college_name" =>'required',
            //     "hsc_college_location" =>'required',
            //     "hsc_field_of_study" =>'required',
            //     "hsc_college_start_year" =>'required',
            //     "hsc_college_end_year" =>'required',
    
    
            //     "ssc_school_name" =>'required',
            //     "ssc_school_location" =>'required',
            //     "ssc_field_of_study" =>'required',
            //     "ssc_school_start_year" =>'required',
            //     "ssc_school_end_year" =>'required',
            // ]);

            //dd($request);

            Education::create([
            "user_id"=>auth()->id(),
            "graduation_college_name" =>$request->gname,
            "graduation_college_location" =>$request->g_location,
            "graduation_field_of_study" =>$request->g_feild_of_study,
            "graduation_cgpa" =>$request->cgpa,
            "graduation_college_start_year" =>$request->g_s_year,
            "graduation_college_end_year" =>$request->g_e_year,

            "hsc_college_name" =>$request->h_name,
            "hsc_college_location" =>$request->h_location,
            "hsc_field_of_study" =>$request->major,
            "hsc_college_start_year" =>$request->h_s_year,
            "hsc_college_end_year" =>$request->h_e_year,


            "ssc_school_name" =>$request->sname,
            "ssc_school_location" =>$request->s_address,
            "ssc_field_of_study" =>$request->s_major,
            "ssc_school_start_year" =>$request->s_s_year,
            "ssc_school_end_year" =>$request->s_e_year,
        ]);
        return redirect()->back();
    }


    public function show(Education $education)
    {
        //
    }

 
    public function edit(Education $education)
    {
        //
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
