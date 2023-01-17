@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Work Experience</h1>
    <p class="mb-5">Tell us about your Job . We'll put your work history in the right order.</p>
    <form action="{{route('work-experience.update',$experience->id)}}" method="POST" class="row g-3 needs-validation" novalidate>
                    @method('put')
                    @csrf
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Job Title</label>
                        <input type="text" value="{{$experience->job_title}}" name="title" class="form-control" id="validationCustom01" >
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Employer</label>
                        <input type="text" value="{{$experience->employer}}"  name="employer" class="form-control" id="validationCustom02" >
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">City</label>
                        <input type="text" value="{{$experience->city}}" name="city" class="form-control" id="validationCustom02" >
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">State</label>
                        <input type="text" value="{{$experience->state}}" name="state" class="form-control" id="validationCustom02" >
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label"> Start Date</label>
                        <div class="input-group has-validation">
                            <input type="date" value="{{$experience->start_date}}" name="s_date" class="form-control" id="validationCustomUsername" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label"> End Date</label>
                        <input type="date" value="{{$experience->end_date}}" name="e_date" class="form-control" id="validationCustom03" >
                    </div>
                    <div>
                        <a href="{{route('work-experience.index')}}" class="btn btn-outline-danger">Back</a>
                        <button class="btn btn-warning" type="submit">Save</button>
                    </div>
                    </div>
                    
                </form>
</div>
@endsection