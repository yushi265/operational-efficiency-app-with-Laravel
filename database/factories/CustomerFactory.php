<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'gender' => '男',
        'birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'tel' => $faker->isbn10,
        'address' => $faker->address,
        'mail' => $faker->unique()->safeEmail,
        'job' => '勤人',
        'company' => $faker->company
    ];
});
