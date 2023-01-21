@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="text-center p-5">Welcome To CV / Resume Builder</h2>
    <div class="d-grid gap-2 col-3 mx-auto d-flex">
        <a href="{{route('user_details.create')}}" class="btn btn-primary text-center">Build Your Resume Now</a>
        @if(auth()->user())
        <button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa-solid fa-eye px-1"></i> Preview
        </button>
        @endif
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Resume/CV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if(auth()->user())
                <iframe src="{{route('resume.index')}}"  width="100%" height="700px"></iframe>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <a href="{{route('resume.download')}}" type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download</a> 
            </div>
            @else
                <p>Enter Your Info First</p>
            @endif
        </div>
    </div>
</div>
@endsection