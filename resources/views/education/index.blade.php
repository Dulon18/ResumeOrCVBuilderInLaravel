@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center">Education Summary</h1>
    <a href="{{route('user_education.create')}}" class="btn btn-outline-success m-3 fw-bold"><i class="fa-solid fa-plus px-1"></i>Add More</a>
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
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
        <a href="{{route('work-experience.create')}}" class="btn btn-outline-primary me-md-2 ">Next Section <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>
@endsection