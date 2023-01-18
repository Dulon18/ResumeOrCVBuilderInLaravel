@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Skills</h1>
    <p class="mb-5">Tell us about your skills which made you special. We'll put your skills in the right order.</p>
    <form action="{{route('skills.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
        @csrf
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Skills Name</label>
            <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Enter skil">
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Rating</label>
            <input type="text" name="rating" class="form-control" id="validationCustom02" placeholder="Rating out of 10">

        </div>
        <div>
            <a href="{{route('skills.index')}}" class="btn btn-outline-danger">Back</a>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
</div>
</form>
</div>
@endsection