<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome');
Route::view('/contact','contact');
Route::resources([
    'jobs' => JobController::class
]);
