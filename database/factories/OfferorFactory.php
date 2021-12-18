<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use App\Model;
use App\Offeror;
use Faker\Generator as Faker;

$factory->define(Offeror::class, function (Faker $faker) {

    return [
        'user_id' => $faker->numberBetween($min=1,$max=3),
        'nick' => $faker->unique()->firstName,
        'birthday' => $faker->date(),
        'country' => $faker->country,
        'city' => $faker->city,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'photo' => $faker->imageUrl(),
        'description' => $faker->sentence(50),
        //'status' => $faker->randomElements(['ACTIVE', 'INACTIVE']),
        'fare' => $faker->randomFloat(),
        'gender' => $faker->word,
        'height' => $faker->randomFloat(),
        'bust_size' => $faker->randomFloat(),
        'hip' => $faker->randomFloat(),
        'waist' => $faker->randomFloat(),
        'ass' => $faker->randomFloat(),
        'eyes' => $faker->colorName,
        'hair' => $faker->randomFloat(),
        'tatoos' => $faker->boolean,
        'contexture' => $faker->sentence(8),
        'skin_color' => $faker->colorName,
        'hair_color' => $faker->colorName,
        'style' => $faker->sentence(10),
        'languages' => $faker->languageCode,
        'hobbies' => $faker->sentence(10),
        'drinks' => $faker->sentence(10),
        'smoker'=> $faker->boolean(),
        'profession' => $faker->sentence(2),
        'piercings' => $faker->boolean,
        'music' => $faker->sentence(10),
        'tags' => $faker->sentence(15),
        'areas' => $faker->sentence(10),
        'depilation' => $faker->sentence(10),
        'weight' => $faker->randomFloat(),
        'shoes_size' => $faker->randomFloat(),
        'shirt_size' => $faker->word,
        'bra_size' => $faker->sentence(2),
        'pants_size' => $faker->randomFloat(),
        'sexual_orientation' => $faker->word,
        'food' => $faker->sentence(10),
        'fragrance' => $faker->sentence(10),
        'availability_for' => $faker->sentence(10)

    ];
});
