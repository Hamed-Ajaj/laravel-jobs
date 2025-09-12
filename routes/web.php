<?php

use App\Models\Job;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome',[
        "name" => "hamed"
    ]);
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->cursorPaginate(3);
    return view('jobs.index',[
        "jobs" => $jobs
    ]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3', 'max:255'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function (string $id) {

    return view('jobs.show',[
        'job' => Job::find($id) ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts', function () {
    return view('posts',[
        "posts" => Post::all()
    ]);
});

Route::get('/posts/{id}', function (string $id) {

    return view('post',
        [
            'post' => Post::find($id)
        ]
    );
});


