<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{

    public function index()
    {
        $details = auth()->user()->user_details;
        //dd($details);
        return view('user_details.index',compact('details'));
    }

 
    public function create()
    {
        return view('user_details.create');
    }

  
    public function store(Request $request)
    {

        $request->validate([
            
            'fname'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
        ]);
        
        UserDetails::create([
            "fullname" =>$request->fname,
            "email" =>$request->email,
            "phone" =>$request->phone,
            "address" =>$request->address,
            "user_id"=>auth()->id(),
            
        ]);
        return redirect()->route('user_education.create');
    }


    public function show(UserDetails $userDetails)
    {
        //
    }


    public function edit( $userDetails)
    {
        $details=UserDetails::find($userDetails);
        return view('user_details.edit',compact('details'));
    }


    public function update(Request $request, $userDetails)
    {
        $details=UserDetails::find($userDetails);
        $details->update([
            "fullname" =>$request->fname,
            "email" =>$request->email,
            "phone" =>$request->phone,
            "address" =>$request->address,
        ]);
        return redirect()->route('user_education.index')->with('success',' Update successfully..');
    }

  
    public function destroy( $id)
    {
        $userDetails=UserDetails::find($id)->delete();
        return redirect()->back()->with('success',' Delete successfully..');
    }
}
