<?php

namespace Database\Factories;

use App\Models\Department; // Pastikan ini ada di bagian atas file seeder atau factory Anda
use App\Models\grade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'grade_id' => $gradeId = fake()->numberBetween(1,33),
            'department_id' => function () use ($gradeId) {
                $grade = grade::find($gradeId);

                if ($grade) {
                    if (str_contains($grade->name, 'PPLG')) {
                        return Department::where('name', 'PPLG')->first()->id;
                    } elseif (preg_match('/Animasi (1|2|3)/', $grade->name)) {
                        return Department::where('name', 'Animasi 3D')->first()->id;
                    } elseif (preg_match('/Animasi (4|5)/', $grade->name)) {
                        return Department::where('name', 'Animasi 2D')->first()->id;
                    } elseif (str_contains($grade->name, 'Teknik Grafika')) {
                        return Department::where('name', 'DKV TG')->first()->id;
                    } elseif (str_contains($grade->name, 'DKV')) {
                        return Department::where('name', 'DKV DG')->first()->id;
                    }
                }

            },
            'alamat' => fake()->city(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
