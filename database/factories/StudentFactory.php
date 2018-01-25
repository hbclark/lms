<?php

use Faker\Generator as Faker;
use App\Student;

$factory->define(Student::class, function (Faker $faker) {
    $date_time=$faker->date.' '.$faker->time;


    return [
        'name'=>$faker->name,
        'email'=>$faker->unique()->safeEmail,
        'profile'=>str_random(60),
        'created_at'=>$date_time,
        'updated_at'=>$date_time,
    ];
});
