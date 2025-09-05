<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Institution;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        // Random institution
        $institution = Institution::inRandomOrder()->first();

        // Random classroom from that institution
        $classroom = $institution
            ? Classroom::where('institution_id', $institution->id)->inRandomOrder()->first()
            : null;

        return [
            'institution_id' => $institution?->id ?? 1, // fallback if null
            'class_id' => $classroom?->id ?? 1,         // fallback if null
            'parent_id' => null,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'admission_number' => strtoupper('ADM' . Str::random(6)),
            'date_of_birth' => $this->faker->dateTimeBetween('-15 years', '-6 years')->format('Y-m-d'),
            'gender' => $this->faker->randomElement(['M', 'F']),
            'photo_path' => null,
            'status' => 'active',
        ];
    }
}
