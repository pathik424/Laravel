<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    use WithoutModelEvents;
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\User::factory(1000)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // {
        //     $this->call([
        //         UserSeeder::class,
        //     ]);
        // }


    }
}
