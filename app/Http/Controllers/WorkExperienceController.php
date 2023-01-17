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
        $experience = auth()->user()->experience;
        //dd($experience);
        return view('experience.index', compact('experience'));
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
        $experience = WorkExperience::find($id);
        return view('experience.edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $experience = WorkExperience::find($id);

        $experience->update([
            'job_title' => $request->title,
            'employer' => $request->employer,
            'city' => $request->city,
            'state' => $request->state,
            'start_date' => $request->s_date,
            'end_date' => $request->e_date,
        ]);
        return redirect()->route('work-experience.index');
    }

    public function destroy($id)
    {
        WorkExperience::find($id)->delete();
        return redirect()->back();
    }
}
