@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="mb-5">User Details Summary</h1>
    <a href="{{route('user_details.create')}}" class="btn btn-outline-success mb-3">Add More</a>
    @foreach($details as $d)
    <div class="card mt-3">
        <div class="card-body">
            <h4 class="fw-bold">
                {{$d->fullname}}
            </h4>
            <p>Email : {{$d->email}} | Phone: {{$d->phone}} | Addres: {{$d->address}}</p>
            <div class="mt-3">
                <a href="{{route('skills.edit',$d->id)}}" class="btn btn-warning fw-bold text-primary btn-sm">Edit</a>
                <a href="{{route('skills.destroy',$d->id)}}" class="btn btn-danger fw-bold btn-sm">Delete</a>
            </div>
        </div>
        </div>
        @endforeach
</div>
@endsection