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
    $jobs = Job::with('employer')->get();
    return view('jobs',[
        "jobs" => $jobs
    ]);
});

Route::get('/jobs/{id}', function (string $id) {

    return view('job',[
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


