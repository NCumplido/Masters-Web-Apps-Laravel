<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BlogPost;
use Faker\Generator as Faker;

$factory->define(BlogPost::class, function (Faker $faker) {
    return [
        
        'creator' => $faker->name(),
        'title' => $faker->title,
        //'email' => $faker->unique()->safeEmail,
        'content' => $faker->text(),
        'votes' => $faker->numberBetween(-10,10),

        //Use this to create roles for users.
        'topic' => $faker->randomElement(['Funny','Food', 'Cats', 'Dogs', 'Video Games']), 
        
        'user_id'=>App\User::inRandomOrder()->first()->id,
    ];
});
