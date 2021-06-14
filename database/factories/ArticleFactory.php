<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {
	$title=$faker->unique()->sentence;
    return [
        'title' => array("es" => $title, "en" => $faker->sentence),
        'slug' => Str::slug($title, '-'),
        'content' => array("es" => "<p>".$faker->text(1500)."</p>", "en" => "<p>".$faker->text(1500)."</p>"),
        'image' => 'imagen.jpg',
        'keywords' => array("es" => $faker->sentence(1).", ".$faker->sentence(1).", ".$faker->sentence(1), "en" => $faker->sentence(1).", ".$faker->sentence(1).", ".$faker->sentence(1)),
        'state' => "1",
        'category_id' => $faker->randomElement(array(11, 12, 13, 14, 15)),
        'user_id' => 1
    ];
});
