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

                <form action="{{route('user_edu.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Institution Name</label>
                        <input type="text" name="name" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Institution Location</label>
                        <input type="text" name="location" class="form-control" id="validationCustom02" required>
                      
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Degree</label>
                        <input type="text" name="degree" class="form-control" id="validationCustom02" required>
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Major Subject</label>
                        <input type="text" name="field_of_study" class="form-control" id="validationCustom02" required>
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label"> CGPA / GPA</label>
                        <input type="text" name="cgpa" class="form-control" id="validationCustom02" required>
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Gratudation Start Year</label>
                        <div class="input-group has-validation">
                            <input type="date" name="s_year" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Gratudation End Year</label>
                        <input type="date" name="e_year" class="form-control" id="validationCustom03" required>
                    </div>


                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection