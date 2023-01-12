@extends('layouts.app')
@section('content')
<div class="container">
<h2>Welcome To CV / Resume Builder</h2>
<a href="{{route('user_details.create')}}" class="btn btn-info">Build Your Resume Now</a>

</div>

@endsection