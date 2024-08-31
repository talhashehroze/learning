<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'hello'
    ]);
});


Route::get('/jobs', function () {
    $jobs = Job::all();
    return view('jobs')->with(compact('jobs'));
});

Route::get('/job/{id}', function ($id) {


    $job = Job::find($id);
    $job = compact('job');
    return view('job')->with($job);
});

Route::get('/contact', function () {
    return view('contact');
});
