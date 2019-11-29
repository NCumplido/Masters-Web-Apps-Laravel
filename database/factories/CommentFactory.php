<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
//ToDo: change this to get the users id through the blogpost
        'creator' => $faker->firstname(),
        'content' => $faker->text(),
        'blogpost_id'=>App\BlogPost::inRandomOrder()->first()->id,

    ];
});
