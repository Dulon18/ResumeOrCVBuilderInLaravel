@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="text-center text-white bg-primary fw-bold m-3 rounded">
            <h1 class="m-3">Education Summary</h1>
        </div>
            <a href="{{route('user_education.create')}}" class="btn btn-outline-success m-3 fw-bold">Add More</a>

            @if ($errors->any())
                <div class="alert alert-danger " data-bs-dismiss="alert" aria-label="Close">
                    <ul>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                        </div>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      
                    </ul>  
                </div>
                @endif
        @foreach($education as $edu)
        <div class="card m-3">
            <div class="card-body">
                <h4>{{$edu->college_name}}</h4>
                <p> {{$edu->college_location}}</p>
                <p>{{$edu->degree}}</p>
                <p>CGPA: {{$edu->cgpa}}</p>
                ( {{$edu->graduation_start_year}}  -
                {{$edu->graduation_end_year}})
                <div class="mt-3">
                    <a href="{{route('user_edu.edit',$edu->id)}}" class="btn btn-warning fw-bold text-primary">Edit</a>
                    <a href="{{route('user_edu.destroy',$edu->id)}}" class="btn btn-danger fw-bold">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
@endsection