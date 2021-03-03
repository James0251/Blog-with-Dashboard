<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Section;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Section::class, function (Faker $faker) {
    $name = $faker->realText(rand(10, 20));
    return [
        'name' => $name,
        'content' => $faker->realText(rand(200, 500)),
        'slug' => Str::slug($name),
    ];
});
