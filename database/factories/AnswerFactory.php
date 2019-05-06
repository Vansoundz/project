<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Answer;
use App\User;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        //
        'body' => $faker->paragraphs(rand(4,8), true),
        'user_id' => User::pluck('id')->random(),
        'votes_count' => rand(0, 6),
    ];
});
