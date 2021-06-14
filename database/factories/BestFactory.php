<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Best;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Best::class, function (Faker $faker) {
	$name=$faker->firstName;
	$lastname=$faker->lastName;
	$phone=NULL;
	if ($faker->boolean) {
		$phone=$faker->e164PhoneNumber;
	}
    return [
        'name' => $name,
        'lastname' => $lastname,
        'slug' => Str::slug($name." ".$lastname, '-'),
        'photo' => 'photo.jpg',
        'email' => $faker->email,
        'phone' => $phone,
        'url' => 'https://app.bitthrem.com/register',
        'state' => '1',
        'country_id' => $faker->randomElement(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)),
    ];
});
