<?php

namespace Database\Seeders;

use App\Models\student;
use App\Models\grade;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Department::factory(5)->create();  // Use the correct model name
        grade::factory(33)->create();
        student::factory(200)->create();

        // // Kelas PPLG
        // grade::factory()->create(['kelas' => '10 PPLG 1', 'department_id' => 1]);
        // grade::factory()->create(['kelas' => '10 PPLG 2', 'department_id' => 1]);
        // grade::factory()->create(['kelas' => '11 PPLG 1', 'department_id' => 1]);
        // grade::factory()->create(['kelas' => '11 PPLG 2', 'department_id' => 1]);
        // grade::factory()->create(['kelas' => '12 PPLG 1', 'department_id' => 1]);
        // grade::factory()->create(['kelas' => '12 PPLG 2', 'department_id' => 1]);

        // // Kelas Animasi 3D (3 kelas setiap angkatan)
        // grade::factory()->create(['kelas' => '10 Animasi 3D 1', 'department_id' => 2]);
        // grade::factory()->create(['kelas' => '10 Animasi 3D 2', 'department_id' => 2]);
        // grade::factory()->create(['kelas' => '10 Animasi 3D 3', 'department_id' => 2]);
        // grade::factory()->create(['kelas' => '11 Animasi 3D 1', 'department_id' => 2]);
        // grade::factory()->create(['kelas' => '11 Animasi 3D 2', 'department_id' => 2]);
        // grade::factory()->create(['kelas' => '11 Animasi 3D 3', 'department_id' => 2]);
        // grade::factory()->create(['kelas' => '12 Animasi 3D 1', 'department_id' => 2]);
        // grade::factory()->create(['kelas' => '12 Animasi 3D 2', 'department_id' => 2]);
        // grade::factory()->create(['kelas' => '12 Animasi 3D 3', 'department_id' => 2]);

        // // Kelas Animasi 2D (hanya kelas 4 dan 5 setiap angkatan)
        // grade::factory()->create(['kelas' => '10 Animasi 2D 4', 'department_id' => 3]);
        // grade::factory()->create(['kelas' => '10 Animasi 2D 5', 'department_id' => 3]);
        // grade::factory()->create(['kelas' => '11 Animasi 2D 4', 'department_id' => 3]);
        // grade::factory()->create(['kelas' => '11 Animasi 2D 5', 'department_id' => 3]);
        // grade::factory()->create(['kelas' => '12 Animasi 2D 4', 'department_id' => 3]);
        // grade::factory()->create(['kelas' => '12 Animasi 2D 5', 'department_id' => 3]);

        // // Kelas DKV DG
        // grade::factory()->create(['kelas' => '10 DKV DG 1', 'department_id' => 4]);
        // grade::factory()->create(['kelas' => '10 DKV DG 2', 'department_id' => 4]);
        // grade::factory()->create(['kelas' => '11 DKV DG 1', 'department_id' => 4]);
        // grade::factory()->create(['kelas' => '11 DKV DG 2', 'department_id' => 4]);
        // grade::factory()->create(['kelas' => '12 DKV DG 1', 'department_id' => 4]);
        // grade::factory()->create(['kelas' => '12 DKV DG 2', 'department_id' => 4]);

        // // Kelas DKV TG
        // grade::factory()->create(['kelas' => '10 DKV TG 3', 'department_id' => 5]);
        // grade::factory()->create(['kelas' => '10 DKV TG 4', 'department_id' => 5]);
        // grade::factory()->create(['kelas' => '10 DKV TG 5', 'department_id' => 5]);
        // grade::factory()->create(['kelas' => '11 DKV TG 3', 'department_id' => 5]);
        // grade::factory()->create(['kelas' => '11 DKV TG 4', 'department_id' => 5]);
        // grade::factory()->create(['kelas' => '11 DKV TG 5', 'department_id' => 5]);
        // grade::factory()->create(['kelas' => '12 DKV TG 3', 'department_id' => 5]);
        // grade::factory()->create(['kelas' => '12 DKV TG 4', 'department_id' => 5]);
        // grade::factory()->create(['kelas' => '12 DKV TG 5', 'department_id' => 5]);
    }
}
