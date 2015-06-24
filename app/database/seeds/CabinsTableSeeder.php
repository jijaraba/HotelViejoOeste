<?php

use Faker\Factory as Faker;

class CabinsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('cabins')->delete();
        $faker = Faker::create();
        foreach (range(1, 9) as $index) {

            $name =  $faker->citySuffix;

            Cabin::create([
                'name' => ucfirst($name),
                'description' => $faker->sentence($nbWords = 40),
                'capacity' => $faker->randomDigitNotNull,
                'rate_ls' => $faker->numberBetween($min = 200000, $max = 1200000),
                'rate_hs' => $faker->numberBetween($min = 200000, $max = 1200000),
                'slug' => $name
            ]);
        }
    }
}