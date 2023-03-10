@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Skills</h1>
    <p class="mb-5">Tell us about your skills . We'll put your skills in the right order.</p>
    <form action="{{route('skills.update',$skill->id)}}" method="POST" class="row g-3 needs-validation" novalidate>
        @method('put')
        @csrf
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Skills Name</label>
            <input type="text" name="name" class="form-control" id="validationCustom01" value="{{$skill->name}}">
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Rating</label>
            <input type="text" name="rating" class="form-control" id="validationCustom02" value="{{$skill->rating}}">
        </div>
        <div>
            <a href="{{route('skills.index')}}" class="btn btn-outline-danger">Back</a>
            <button class="btn btn-success" type="submit">Save</button>
        </div>
</div>
</form>
</div>
@endsection