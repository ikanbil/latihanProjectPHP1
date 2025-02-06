<?php

namespace Database\Factories;

use App\Models\Department; // Pastikan ini ada di bagian atas file seeder atau factory Anda
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gradeName = fake()->unique()->randomElement([
            '10 PPLG 1', '10 PPLG 2', '11 PPLG 1', '11 PPLG 2', '12 PPLG 1', '12 PPLG 2',
            '10 Animasi 1', '10 Animasi 2', '10 Animasi 3', '10 Animasi 4', '10 Animasi 5',
            '11 Animasi 1', '11 Animasi 2', '11 Animasi 3', '11 Animasi 4', '11 Animasi 5',
            '12 Animasi 1', '12 Animasi 2', '12 Animasi 3', '12 Animasi 4', '12 Animasi 5',
            '10 Teknik Grafika 1', '10 Teknik Grafika 2', '11 Teknik Grafika 1', '11 Teknik Grafika 2',
            '12 Teknik Grafika 1', '12 Teknik Grafika 2', '10 DKV 1', '10 DKV 2', '11 DKV 1',
            '11 DKV 2', '12 DKV 1', '12 DKV 2',
        ]);

        $departmentId = null;

        if (str_contains($gradeName, 'PPLG')) {
            $departmentId = Department::where('name', 'PPLG')->value('id');
        } elseif (preg_match('/Animasi (1|2|3)/', $gradeName)) {
            $departmentId = Department::where('name', 'Animasi 3D')->value('id');
        } elseif (preg_match('/Animasi (4|5)/', $gradeName)) {
            $departmentId = Department::where('name', 'Animasi 2D')->value('id');
        } elseif (str_contains($gradeName, 'Teknik Grafika')) {
            $departmentId = Department::where('name', 'DKV TG')->value('id');
        } elseif (str_contains($gradeName, 'DKV')) {
            $departmentId = Department::where('name', 'DKV DG')->value('id');
        }

        return [
            'name'=> $gradeName,
            'department_id' => $departmentId,

        ];
    }
}
