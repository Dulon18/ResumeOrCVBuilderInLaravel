<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    
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


    public function update(Request $request, Skill $skill)
    {
        //
    }


    public function destroy(Skill $skill)
    {
        //
    }
}
