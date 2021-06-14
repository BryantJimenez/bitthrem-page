<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Help;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Help::class, function (Faker $faker) {
	$title=$faker->unique()->sentence;
    return [
        'title' => array("es" => $title, "en" => $faker->sentence),
        'slug' => Str::slug($title, '-'),
        'content' => array("es" => "<p>".$faker->text(1500)."</p>", "en" => "<p>".$faker->text(1500)."</p>"),
        'keywords' => array("es" => $faker->sentence(1).", ".$faker->sentence(1).", ".$faker->sentence(1), "en" => $faker->sentence(1).", ".$faker->sentence(1).", ".$faker->sentence(1)),
        'state' => "1",
        'category_id' => $faker->randomElement(array(6, 7, 8, 9, 10))
    ];
});
