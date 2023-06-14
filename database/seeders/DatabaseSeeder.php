<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       
        Category::factory()->create([
            'name' => 'fit-out'
        ]);
        Category::factory()->create([
            'name' => 'events'
        ]);
        Category::factory()->create([
            'name' => 'exhibitions'
        ]);
        Category::factory()->create([
            'name' => 'furniture rental'
        ]);
        Category::factory()->create([
            'name' => 'tents & marquees'
        ]);
        Listing::factory(50)->create();
    }
}
