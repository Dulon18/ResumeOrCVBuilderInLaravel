@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="mb-5">Work Experience Summary</h1>
    <a href="{{route('work-experience.create')}}" class="btn btn-outline-success mb-3">Add More</a>
    @foreach($experience as $e)
    <div class="card mt-3">
        <div class="card-body">  
            <h4 class="fw-bold">Job Title: {{$e->job_title}}</h4>  {{$e->employer}}
             <p> {{$e->state}} , {{$e->city}}</p>({{$e->start_date}} -{{$e->end_date}})

             <div class="mt-3">
                    <a href="{{route('work-experience.edit',$e->id)}}" class="btn btn-warning fw-bold text-primary btn-sm">Edit</a>
                    <a href="{{route('work-experience.destroy',$e->id)}}" class="btn btn-danger fw-bold btn-sm">Delete</a>
                </div>
        </div>
    </div>
    @endforeach
</div>
@endsection