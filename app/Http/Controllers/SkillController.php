<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $skills = auth()->user()->skills;
        return view('skills.index',compact('skills'));
    }

    
    public function create()
    {
        return view('skills.create');
    }


    public function store(Request $request)
    {
        $request->validate([
              'name'=>'required',
        ],[

            'name.required' => 'Enter Skills Name',
        ]
    
    );

        Skill::create([
            "user_id" => auth()->id(),
            'name'=>$request->name,
            'rating'=>$request->rating,

        ]);
        return redirect()->route('skills.index');
    }


    public function show(Skill $skill)
    {
        //
    }

    public function edit($id)
    {
        $skill=Skill::find($id);
        return view('skills.edit',compact('skill'));
    }


    public function update(Request $request,$id)
    {
       $skill=Skill::find($id);
       $skill->update([
        'name'=>$request->name,
            'rating'=>$request->rating,
       ]);
       return redirect()->route('skills.index')->with('success',' Update successfully..');
    }


    public function destroy( $id)
    {
        $skill=Skill::find($id)->delete();
        return redirect()->back()->with('success',' Delete successfully..');
    }
}
