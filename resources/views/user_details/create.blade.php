@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card m-3">
            <div class="card-header bg-primary m-3">
                <h2 class="text-center fw-bold text-white">User Details</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger " data-bs-dismiss="alert" aria-label="Close">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>                   
                    </ul>  
                </div>
                @endif
                <form action="{{route('user_details.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Full Name</label>
                        <input type="text" name="fname" class="form-control" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Phone</label>
                        <div class="input-group has-validation">
                            <input type="text" name="phone" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please Enter Your Phone Number.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid Address.
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection