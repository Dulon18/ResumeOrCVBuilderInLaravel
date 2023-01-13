@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card m-3">
            <div class="card-header bg-primary m-3">
                <h2 class="text-center fw-bold text-white">Education</h2>
            </div>
            <div class="card-body">
                <!-- @if ($errors->any())
                <div class="alert alert-danger " data-bs-dismiss="alert" aria-label="Close">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>                   
                    </ul>  
                </div>
                @endif -->
                <form action="{{route('user_edu.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-md-3">
                        <label for="validationCustom01" class="form-label">Gratudation College Name</label>
                        <input type="text" name="gname" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">Gratudation College Location</label>
                        <input type="text" name="g_location" class="form-control" id="validationCustom02" required>
                      
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">Degree</label>
                        <input type="text" name="g_feild_of_study" class="form-control" id="validationCustom02" required>
                      
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">Gratudation CGPA</label>
                        <input type="text" name="cgpa" class="form-control" id="validationCustom02" required>
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Gratudation Start Year</label>
                        <div class="input-group has-validation">
                            <input type="text" name="g_s_year" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Gratudation End Year</label>
                        <input type="text" name="g_e_year" class="form-control" id="validationCustom03" required>
                    </div>

                    <!-- High School start -->
                    
                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">HSC School Name</label>
                        <input type="text" name="h_name" class="form-control" id="validationCustom03" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">HSC School Location</label>
                        <input type="text" name="h_location" class="form-control" id="validationCustom03" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">HSC Major</label>
                        <input type="text" name="major" class="form-control" id="validationCustom03" required>
                    </div>
                 
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">HSC Start Year</label>
                        <input type="text" name="h_s_year" class="form-control" id="validationCustom03" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">HSC End Year</label>
                        <input type="text" name="h_e_year" class="form-control" id="validationCustom03" required>
                    </div>

                    <!-- school section -->

                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">SSC school Name</label>
                        <input type="text" name="sname" class="form-control" id="validationCustom03" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">SSC school Location</label>
                        <input type="text" name="s_address" class="form-control" id="validationCustom03" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">SSC Major</label>
                        <input type="text" name="s_major" class="form-control" id="validationCustom03" required>
                    </div>
                   
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">SSC Start Year</label>
                        <input type="text" name="s_s_year" class="form-control" id="validationCustom03" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">SSC End Year</label>
                        <input type="text" name="s_e_year" class="form-control" id="validationCustom03" required>
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