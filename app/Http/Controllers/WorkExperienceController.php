<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience=auth()->user()->experience;
        //dd($experience);
        return view('experience.index',compact('experience'));
    }

    public function create()
    {
        return view('experience.create');
    }


    public function store(Request $request)
    {

        WorkExperience::create([

            "user_id" => auth()->id(),
            'job_title' => $request->title,
            'employer' => $request->employer,
            'city' => $request->city,
            'state' => $request->state,
            'start_date' => $request->s_date,
            'end_date' => $request->e_date,
        ]);
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
