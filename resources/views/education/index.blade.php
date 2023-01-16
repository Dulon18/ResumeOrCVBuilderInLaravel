@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <!-- <div class="text-center text-white bg-primary fw-bold m-3 rounded"> -->
        <h1 class="text-center">Education Summary</h1>
        <!-- </div> -->
        <a href="{{route('user_education.create')}}" class="btn btn-outline-success m-3 fw-bold">Add More</a>
        <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="" class="btn btn-primary me-md-2" type="button">Work Experience</a>
        </div> -->
        @foreach($education as $edu)
        <div class="card m-3">
            <div class="card-body">
                <h4>{{$edu->college_name}}</h4>
                {{$edu->college_location}} || {{$edu->degree}} || Major : {{$edu->field_of_study}} || CGPA: {{$edu->cgpa}} ||
                ( {{$edu->graduation_start_year}} -
                {{$edu->graduation_end_year}})
                <div class="mt-3">
                    <a href="{{route('user_edu.edit',$edu->id)}}" class="btn btn-warning fw-bold text-primary btn-sm">Edit</a>
                    <a href="{{route('user_edu.destroy',$edu->id)}}" class="btn btn-danger fw-bold btn-sm">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection