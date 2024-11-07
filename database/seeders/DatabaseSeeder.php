<?php

namespace Database\Seeders;

use App\Models\student;
use App\Models\grade;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        student::factory(100)->create();
        
        student::factory(100)->create();

        grade::factory()->create([
            'name' => '10 PPLG 1',
        ]);

        grade::factory()->create([
            'name' => '11 PPLG 2',
        ]);

        grade::factory()->create([
            'name' => '10 PPLG 1',
        ]);

        grade::factory()->create([
            'name' => '11 PPLG 2',
        ]);
    }
}
