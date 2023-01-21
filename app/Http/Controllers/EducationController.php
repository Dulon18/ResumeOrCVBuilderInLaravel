<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $education = auth()->user()->education;
        //dd($education);
        return view('education.index', compact('education'));
    }


    public function create()
    {
        return view('education.create');
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'location' => 'required',
                'field_of_study' => 'required',
                'degree' => 'required',
                'cgpa' => 'required',
                's_year' => 'required|date',
                'e_year' => 'required|date|after:s_year',
            ],
            [
                'name.required' => 'Institution Name is required',
                'location.required' => 'Institution Location is required',
                'field_of_study.required' => 'Major Subject  is required',
                'degree.required' => 'Degree  is required',
                'cgpa.required' => 'CGPA/GPA  is required',
                's_year.required' => 'Starting Year  is required',
                'e_year.required' => 'Ending Year  is required',

            ]
        );

        Education::create([

            "user_id" => auth()->id(),
            "college_name" => $request->name,
            "college_location" => $request->location,
            "degree" => $request->degree,
            "field_of_study" => $request->field_of_study,
            "cgpa" => $request->cgpa,
            "graduation_start_year" => $request->s_year,
            "graduation_end_year" => $request->e_year,
        ]);

        return redirect()->route('user-edu.index')->with('success',' Info added successfully..');
    }


    public function show(Education $education)
    {
        //
    }


    public function edit($id)
    {
        $education=Education::find($id);
        return view('education.edit', compact('education'));
    }


    public function update(Request $request,  $id)
    {
        $education=Education::find($id);

        $education->update([    
            "college_name" => $request->name,
            "college_location" => $request->location,
            "degree" => $request->degree,
            "field_of_study" => $request->field_of_study,
            "cgpa" => $request->cgpa,
            "graduation_start_year" => $request->s_year,
            "graduation_end_year" => $request->e_year,
        ]);
        return redirect()->route('user-edu.index')->with('success',' Update successfully..');
    }

    public function destroy($id)
    {
        Education::find($id)->delete();
        return redirect()->back()->with('success',' Delete successfully..');

    }
}
