@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card m-3">
            <div class="card-header bg-primary m-3">
                <h2 class="text-center fw-bold text-white">User Details</h2>
            </div>
            <div class="card-body">
                <form action="{{route('user_details.update',$details->id)}}" method="POST" class="row g-3 needs-validation" novalidate>
                    @method('put')
                    @csrf
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Full Name</label>
                        <input type="text" name="fname" class="form-control" id="validationCustom01" value="{{$details->fullname}}">

                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="validationCustom02" value="{{$details->email}}">

                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Phone</label>
                        <div class="input-group has-validation">
                            <input type="text" name="phone" class="form-control" id="validationCustomUsername" value="{{$details->phone}}">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="validationCustom03" value="{{$details->address}}">
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom03" class="form-label">Objective / Summary</label>
                        <div class="form-floating">
                            <textarea class="form-control" name="objective" id="floatingTextarea2" style="height: 100px" value="{{$details->objective}}"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="{{route('user_details.index')}}" class="btn btn-outline-danger">Back</a>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection