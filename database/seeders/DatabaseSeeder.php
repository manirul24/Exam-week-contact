<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        Task::truncate();
        for($i=0;$i<10;$i++){
            contact::create([
                'name' => fake()->sentence(10),
                'description' => fake()->sentence(20),
                'due_date' => now()->addDays(rand(1,7))
            ]);
        }



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
