<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\School;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Use the default (first) school
        $defaultSchool = School::first();

        if (! $defaultSchool) {
            $this->command->warn('No school found. Please seed the schools table first.');

            return;
        }

        // Get all classroom IDs
        $classroomIds = Classroom::pluck('id')->toArray();

        if (empty($classroomIds)) {
            $this->command->warn('No classrooms found. Please seed the classrooms table first.');

            return;
        }

        // Seed 50 students
        for ($i = 1; $i <= 50; $i++) {
            DB::table('students')->insert([
                'school_id' => $defaultSchool->id,
                'classroom_id' => $faker->randomElement($classroomIds),
                'admission_no' => 'ADM'.str_pad($i, 5, '0', STR_PAD_LEFT),
                'first_name' => $faker->firstName,
                'middle_name' => $faker->optional()->firstName,
                'last_name' => $faker->lastName,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'dob' => $faker->optional()->date('Y-m-d', '2015-12-31'),
                'parent_name' => $faker->optional()->name,
                'parent_phone' => $faker->optional()->phoneNumber,
                'photo' => null, // or add placeholder path
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
