<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Acticle;
use Faker\Generator as Faker;

$factory->define(Acticle::class, function (Faker $faker) {
    return [
        'category_id' => factory(\App\Models\Category::class),
        'title' => $faker->sentence(4),
        'slug' => $faker->slug,
        'content' => $faker->paragraphs(3, true),
        'image' => $faker->word,
        'status' => $faker->randomElement(["PUBLISHED","DRAFT"]),
        'date' => $faker->date(),
        'featured' => $faker->boolean,
    ];
});
