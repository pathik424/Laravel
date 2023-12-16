<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class YourSeederName extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i <10 ; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                // 'mobile' => $faker->mobile,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
            ]);
        }
    }
}
