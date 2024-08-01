<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


       // Contact::truncate();
        for($i=6;$i<10;$i++){
            Contact::create([
                'name' => fake()->name(3),
                'email' => 'testemail'.$i.'@gmail.com',
                'phone' => fake()->unique()->e164PhoneNumber(),
                'address' => fake()->sentence(20),
            ]);
        }



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
