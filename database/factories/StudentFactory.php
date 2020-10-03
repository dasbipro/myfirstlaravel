<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        "dob"=> $faker->date($format = 'Y-m-d', $max = 'now'),
        "salary"=> $faker->numberBetween($min = 10000, $max = 90000),
        "description"=> $faker->text($maxNbchars = 200),
        "city"=> $faker->city,
        "address"=> $faker->address,
        "country"=> $faker->country,
        "contact"=> $faker->phoneNumber,
        "domain"=> $faker->domainName,
        "ip_address"=> $faker->ipv4,
        "profile_image"=>$faker->imageUrl($width = 640, $height = 480),
        ];
});
