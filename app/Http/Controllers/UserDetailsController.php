<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        $details = auth()->user()->details;
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
            'objective'=>'required',
        ]);
        
        UserDetails::create([
            "fullname" =>$request->fname,
            "email" =>$request->email,
            "phone" =>$request->phone,
            "address" =>$request->address,
            "objective" =>$request->objective,
            "user_id"=>auth()->id(),
            
        ]);
        return redirect()->route('user_details.index')->with('success',' Info added successfully..');
    }


    public function show(UserDetails $userDetails)
    {
        //objective
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
            "objective" =>$request->objective,
        ]);
        return redirect()->route('user_details.index')->with('success',' Update successfully..');
    }

  
    public function destroy( $id)
    {
        $userDetails=UserDetails::find($id)->delete();
        return redirect()->back()->with('success',' Delete successfully..');
    }
}
