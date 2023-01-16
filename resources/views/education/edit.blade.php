@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card m-3">
            <div class="card-header bg-primary m-3">
                <h2 class="text-center fw-bold text-white">Education</h2>
            </div>
            <div class="card-body">
                <!-- error message -->
                @if ($errors->any())
                <div class="alert alert-danger " data-bs-dismiss="alert" aria-label="Close">
                    <ul>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                        </div>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      
                    </ul>  
                </div>
                @endif
                <!-- form start here -->

                <form action="{{route('user_edu.update',$education->id)}}" method="POST" class="row g-3 needs-validation" novalidate>
                    @method('put')
                    @csrf
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Institution Name</label>
                        <input  type="text" name="name" class="form-control" id="validationCustom01" value="{{$education->college_name}}">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Institution Location</label>
                        <input type="text" name="location" class="form-control" id="validationCustom02" value="{{$education->college_location}}">
                      
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Degree</label>
                        <input type="text" name="degree" class="form-control" id="validationCustom02" value="{{$education->degree}}">
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Major Subject</label>
                        <input type="text" name="field_of_study" class="form-control" id="validationCustom02" value="{{$education->field_of_study}}">
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label"> CGPA / GPA</label>
                        <input type="text" name="cgpa" class="form-control" id="validationCustom02" value="{{$education->cgpa}}">
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Gratudation Start Year</label>
                        <div class="input-group has-validation">
                            <input type="date" name="s_year" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="{{$education->graduation_start_year}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Gratudation End Year</label>
                        <input type="date" name="e_year" class="form-control" id="validationCustom03" value="{{$education->graduation_end_year}}">
                    </div>


                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <a href="{{url('user-edu')}}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection