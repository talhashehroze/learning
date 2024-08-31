<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$30,000'
            ]
        ];
    }

    public static function find($id)
    {
        return Arr::first(Job::all(), fn($job) => $job['id'] == $id);
    }
}
