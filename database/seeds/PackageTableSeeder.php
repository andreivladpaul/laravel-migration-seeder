<?php

use Illuminate\Database\Seeder;
use App\Package;
use Faker\Generator as Faker;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $new_package = new Package();
        $new_package->destination = $faker->city();
        $new_package->departure = $faker->city();
        $new_package->guests = $faker->numberBetween(1, 10);
        $new_package->from = $faker->dateTimeBetween('-1 years', '+1 month')->getTimestamp();
        $new_package->to = $faker->dateTimeBetween('-1 years', '+1 month')->getTimestamp();
        $new_package-> save();
    }
}
