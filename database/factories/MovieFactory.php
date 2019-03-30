<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Movie::class, function (Faker $faker) {
    return [
       'name'=>$faker->text(20),
       'genere'=>$faker->text(20),
       'desc'=>$faker->text(200),
       'price'=>$faker->randomFloat(2, 0, 1),
       'language'=>$faker->text(20),
       'dir'=>$faker->text(20),
       'cast'=>$faker->text(20),
       'img1'=>$faker->text(20),
       'img2'=>$faker->text(20),
       'img3'=>$faker->text(20)
    ];
});
