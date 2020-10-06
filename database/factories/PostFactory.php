<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
    'name'=>$faker -> firstName(),
    'description' =>$faker -> sentence($nbWords = 6, $variableNbWords = true),
    'like' =>$faker -> randomDigit(),
    'shares' =>$faker-> randomDigit()
    ];
});
