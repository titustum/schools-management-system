<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\School;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\KenyanPerson;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new \KenyaFaker\Provider\en_KE\Person($faker));
        $faker->addProvider(new \KenyaFaker\Provider\en_KE\PhoneNumber($faker));
        $faker->addProvider(new \KenyaFaker\Provider\en_KE\Address($faker));


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
        
        DB::table('students')->truncate(); // Clear existing data

        // Seed 50 students
        for ($i = 1; $i <= 50; $i++) {

            $gender = $faker->randomElement(['male', 'female']);

            $gender = $faker->randomElement(['Male', 'Female']);

            DB::table('students')->insert([
                'school_id'      => $defaultSchool->id,
                'classroom_id'   => $faker->randomElement($classroomIds),
                'admission_no'   => 'ADM' . str_pad($i, 5, '0', STR_PAD_LEFT),
                'gender'         => $gender,
                'first_name'     => $faker->firstName($gender),
                // 'middle_name'    => $faker->optional()->lastName(),
                'last_name'      => $faker->lastName,
                'dob'            => $faker->optional()->date('Y-m-d'),
                'parent_name'    => $faker->name(),
                'parent_phone'   => $faker->phoneNumber(),
                'photo'          => null,
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);

        }
    }
}
