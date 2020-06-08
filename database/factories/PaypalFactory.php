<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paypal;
use Faker\Generator as Faker;

$factory->define(Paypal::class, function (Faker $faker) {
    return [
        'amount' => 28.70
    ];
});
