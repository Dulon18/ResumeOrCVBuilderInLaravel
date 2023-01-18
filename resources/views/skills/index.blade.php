@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="mb-5">Skills Summary</h1>
    <a href="{{route('skills.create')}}" class="btn btn-outline-success mb-3"><i class="fa-solid fa-plus px-1"></i>Add More</a>
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
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
        <a href="" class="btn btn-outline-primary me-md-2 ">Next Section <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>
@endsection