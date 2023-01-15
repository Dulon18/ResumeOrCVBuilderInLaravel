@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="text-center text-white bg-primary fw-bold m-3 rounded">
            <h1 class="m-3">Education Summary</h1>
        </div>
        @foreach($education as $edu)
        <div class="card m-3">
            <div class="card-body">
                <h4>{{$edu->college_name}}</h4>
                <p> {{$edu->college_location}}</p>
                <p>{{$edu->degree}}</p>
                <p>CGPA: {{$edu->cgpa}}</p>
                ( {{$edu->graduation_start_year}} -
                {{$edu->graduation_end_year}})
                <div class="mt-3">
                    <a href="" class="btn btn-warning fw-bold text-primary" >Edit</a>
                    <a href="" class="btn btn-danger fw-bold">Delete</a>
                </div>

            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection