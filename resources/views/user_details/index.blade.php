@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="mb-5">User Details Summary</h1>

    <a href="{{route('user_details.create')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus px-1"></i>Add More</a>
    @foreach($details as $d)
    <div class="card mt-3">
        <div class="card-body">
            <h4 class="fw-bold">
                {{$d->fullname}}
            </h4>
            <p>Email : {{$d->email}} | Phone: {{$d->phone}} | Addres: {{$d->address}}</p>
            <h4>Summary / Objective : </h4>
            <p>{{$d->objective}}</p>
            <div class="mt-3">
                <a href="{{route('user_details.edit',$d->id)}}" class="btn btn-warning fw-bold text-primary btn-sm">Edit</a>
                <a href="{{route('user_details.destroy',$d->id)}}" class="btn btn-danger fw-bold btn-sm">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
        <a href="{{route('user_education.create')}}" class="btn btn-outline-primary me-md-2 ">Next Section <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>

@endsection