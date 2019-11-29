<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BlogPost;
use Faker\Generator as Faker;

$factory->define(BlogPost::class, function (Faker $faker) {
    return [
        
        'creator' => $faker->name(),
        'email' => $faker->unique()->safeEmail,
        'content' => $faker->text(),
        'votes' => $faker->numberBetween(-100,100),

        //Use this to create roles for users.
        'topic' => $faker->randomElement(['Funny','Food', 'Cats', 'Dogs', 'Video Games']), 
        
        'user_id'=>App\User::inRandomOrder()->first()->id,
    ];
});
