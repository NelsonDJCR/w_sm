<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {

    $nick = $faker->unique()->sentence(1);

    return [
        'user_id' => $faker->unique()->randomNumber(),
        'nick' => $nick,
        'birthday' => $faker->date(),
        'city' => $faker->sentence(1),
        'address' => $faker->sentence(12),
        'phone' => $faker->phoneNumber,
        'photo' => $faker->imageUrl(),
        'description' => $faker->sentence(50),
        //'status' => $faker->randomElements(['ACTIVE', 'INACTIVE']),
        'slug' => str_slug($nick)
    ];
    }
)
;



