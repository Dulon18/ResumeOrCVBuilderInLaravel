<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{

    public function index()
    {
        //
    }

 
    public function create()
    {
        return view('user_details.create');
    }

  
    public function store(Request $request)
    {
        UserDetails::create([
            "fullname" =>$request->fname,
            "email" =>$request->email,
            "phone" =>$request->phone,
            "address" =>$request->address,
        ]);
        return redirect()->back();
    }


    public function show(UserDetails $userDetails)
    {
        //
    }


    public function edit(UserDetails $userDetails)
    {
        //
    }


    public function update(Request $request, UserDetails $userDetails)
    {
        //
    }

  
    public function destroy(UserDetails $userDetails)
    {
        //
    }
}
