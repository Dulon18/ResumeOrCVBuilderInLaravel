@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="text-center p-5">Welcome To CV / Resume Builder</h2>
    <div class="d-grid gap-2 col-2 mx-auto">
        <a href="{{route('user_details.create')}}" class="btn btn-primary text-center">Build Your Resume Now</a>
    </div>
</div>
@endsection