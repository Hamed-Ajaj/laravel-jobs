<h1>{{$job->title}}</h1>
    <p>
    Congratulations! Your job posting has been successfully created.
    </p>

    <p>
    <a href="{{url("/jobs/" . $job->id)}}">View Job</a>
</p>
