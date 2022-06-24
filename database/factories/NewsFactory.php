<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\News;
Use App\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    return [
        "title"       => $faker ->name,
        "description" => $faker ->text(100),
        "Content"     => $faker ->text(200),
    ];
});
