@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Work Experience</h1>
    <p class="mb-5">Tell us about your Job . We'll put your work history in the right order</p>
    <form action="{{route('user_edu.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Job Title</label>
                        <input type="text" name="title" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Employeer</label>
                        <input type="text" name="employeer" class="form-control" id="validationCustom02" required>
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">City</label>
                        <input type="text" name="city" class="form-control" id="validationCustom02" required>
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">State</label>
                        <input type="text" name="state" class="form-control" id="validationCustom02" required>
                      
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label"> Start Date</label>
                        <div class="input-group has-validation">
                            <input type="date" name="s_date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label"> End Date</label>
                        <input type="date" name="e_date" class="form-control" id="validationCustom03" required>
                    </div>
                    <div>
                        <a href="" class="btn btn-outline-danger">Back</a>
                        <button class="btn btn-warning" type="submit">Next</button>
                    </div>
                    </div>
                    
                </form>
</div>
@endsection