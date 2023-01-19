<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="bg-primary mt-4">
        <h1 class="text-center p-3 text-white fw-bold">Resume</h1>
        </div>
        <section class="heading">
        <h3>{{$resume->user_details->fullname}}</h3>
        <p>Emaill : {{$resume->user_details->email}}</p>
        <p>Phone: {{$resume->user_details->phone}}</p>
        <p>Address: {{$resume->user_details->address}}</p>
    </section>

    <hr>
    <section class="summary">
        <h3>Objective / Summary</h3>
        <p>{{$resume->user_details->objective}}</p>
    </section>
    <hr>

    <section class="education">
        <h2>Education</h2>
        @foreach($resume->education as $e)
        <h5>{{$e->college_name}}</h5>
        <p>{{$e->college_location}}</p>
        <p>{{$e->degree}}, Major:{{$e->field_of_study}}</p>
        <p>Duration : ({{$e->graduation_start_year}} -
            {{$e->graduation_end_year}})
        </p>
        @endforeach
    </section>
    <hr>
    <section class="work_experience">
        <h2>Work Experience</h2>
        @foreach($resume->experience as $e)
        <h5>{{$e->job_title}}</h5>
        <p>{{$e->employer}}</p>
        <p>{{$e->state}} , {{$e->city}}</p>
        <p>Duration : ({{$e->start_date}} -
            {{$e->end_date}})
        </p>
        @endforeach
    </section>
    <hr>
    <section class="skills">
        <h2>Skills</h2>
        @foreach($resume->skills as $e)
        <p>{{$e->name}} ({{$e->rating}} out of 10)</p>
        @endforeach
    </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>