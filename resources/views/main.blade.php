@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="text-center">Welcome To CV / Resume Builder</h2>
    <!-- <img src="{{url('bg.jpg')}}" class="img-fluid float-end" alt="..."> -->
    <div class="d-grid gap-2 col-2 mx-auto">
        <a href="{{route('user_details.create')}}" class="btn btn-info text-center">Build Your Resume Now</a>
    </div>


</div>

@endsection