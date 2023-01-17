@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="mb-5">Skills Summary</h1>
    <a href="{{route('skills.create')}}" class="btn btn-outline-success mb-3">Add More</a>
    @foreach($skills as $s)
    <div class="card mt-3">
        <div class="card-body">
            <h4 class="fw-bold">
                {{$s->name}}
            </h4>
            <p>Rating : {{$s->rating}} / 10</p>
            <div class="mt-3">
                <a href="{{route('skills.edit',$s->id)}}" class="btn btn-warning fw-bold text-primary btn-sm">Edit</a>
                <a href="{{route('skills.destroy',$s->id)}}" class="btn btn-danger fw-bold btn-sm">Delete</a>
            </div>
        </div>
        </div>
        @endforeach
</div>
@endsection