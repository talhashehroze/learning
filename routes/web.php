<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'greeting'=>'hello'
    ]);
});


Route::get('/jobs', function () {
    return view('jobs',[
        'jobs'=>[
            [
                'id'=> 1,
                'title'=>'Director',
                'salary'=>'$50,000'
            ],
            [
                'id'=>2,
                'title'=>'Programmer',
                'salary'=>'$10,000'
            ],
            [
                'id'=>3,
                'title'=>'Teacher',
                'salary'=>'$30,000'
            ]
        ]
    ]);
});

Route::get('/job/{id}', function ($id) {
    var_dump($id);
    die;
    return view('contact');
});

Route::get('/contact', function () {
    return view('contact');
});