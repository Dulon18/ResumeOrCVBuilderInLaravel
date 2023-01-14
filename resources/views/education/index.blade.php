@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @foreach($education as $edu)
        <div class="card">

            <div class="card-body">
                <div class="card-header bg-primary">
                    <h1 class="text-center text-white fw-bold"> Education Info</h1>
                </div>
                <div class="m-3">
                <h2>Degree</h2>
               {{$edu->graduation_college_name}}   ||
               {{$edu->graduation_college_location}}  || 
               {{$edu->graduation_field_of_study}}  || 
              CGPA: {{$edu->graduation_cgpa}}  || 
               {{$edu->graduation_college_start_year}}   -
               {{$edu->graduation_college_end_year}}   
               </div>

               <div class="m-3">
                <h2>HSC</h2>
               {{$edu->hsc_college_name}}   ||
               {{$edu->hsc_college_location}}  || 
               {{$edu->hsc_field_of_study}}  || 
               {{$edu->hsc_college_start_year}}   -
               {{$edu->hsc_college_end_year}}   
               </div>
               <div class="m-3">
                <h2>SSC</h2>
               {{$edu->ssc_school_name}}   ||
               {{$edu->ssc_school_location}}  || 
               {{$edu->ssc_field_of_study}}   ||
               {{$edu->ssc_school_start_year}}   -
               {{$edu->ssc_school_end_year}}   
               </div>
               <div class="m-3">
               <a href="" class="btn btn-info">Edit</a>
              <a href="" class="btn btn-danger">Delete</a>
               </div>
               
            </div>
       
        </div>
        @endforeach
    </div>
</div>
@endsection