<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .resume {
            text-align: center;
            background: #3c3c3c;
            color: #ffffff;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="bg-primary mt-4">
            <h1 class="text-center p-3 text-white fw-bold resume">Resume</h1>
        </div>
        <section class="heading">
            <h3 class="fw-bold mt-3">{{$resume->user_details->fullname}}</h3>
            Emaill : {{$resume->user_details->email}}
            Phone: {{$resume->user_details->phone}}
            <p>Address: {{$resume->user_details->address}}</p>
        </section>
        <hr>
        
        <section class="summary">
            <h3 class="fw-bold">Objective / Summary</h3>
            <p>{{$resume->user_details->objective}}</p>
        </section>
        <hr>

        <section class="education">
            <h2 class="fw-bold">Education</h2>
            @foreach($resume->education as $e)
            <h4>{{$e->college_name}}</h4>
            {{$e->college_location}}<br>
            {{$e->degree}} , Major : {{$e->field_of_study}} , CGPA : {{$e->cgpa}}<br>
            Duration : ({{$e->graduation_start_year}} - {{$e->graduation_end_year}})
            @endforeach
        </section>
        <hr>

        <section class="work_experience">
            <h2 class="fw-bold">Work Experience</h2>
            @foreach($resume->experience as $e)
            <h5>{{$e->job_title}}</h5>{{$e->employer}}<br>{{$e->state}} , {{$e->city}}<br>
            Duration : ({{$e->start_date}} -
            {{$e->end_date}})
            @endforeach
        </section>
        <hr>
        <section class="skills">
            <h2 class="fw-bold">Skills</h2>
            @foreach($resume->skills as $key=>$e)
            {{$key+1}}. {{$e->name}} ({{$e->rating}} out of 10)<br>
            @endforeach
        </section>
        
    </div>
    <!-- <a href="{{url('/')}}" class="btn btn-outline-danger mt-3">Back</a>
        <a href="{{route('resume.download')}}" type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download</a>  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>