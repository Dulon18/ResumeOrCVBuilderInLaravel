@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class=" fw-bold mb-4">User Details</h2>
    <form action="{{route('user_details.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
        @csrf
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Full Name</label>
            <input type="text" name="fname" class="form-control" id="validationCustom01">

        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="validationCustom02">

        </div>
        <div class="col-md-6">
            <label for="validationCustomUsername" class="form-label">Phone</label>
            <div class="input-group has-validation">
                <input type="text" name="phone" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend">

            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="validationCustom03">
        </div>

        <div class="col-12">
        <a href="{{route('user_details.index')}}" class="btn btn-outline-danger">Back</a>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>

@endsection