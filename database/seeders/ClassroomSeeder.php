<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // start with PP1 to Grade 9
        $school = \App\Models\School::first() ?? 1; // assuming a default school exists
        $classNames = [
            'PP1', 'PP2', 'Grade 1', 'Grade 2', 'Grade 3',
            'Grade 4', 'Grade 5', 'Grade 6', 'Grade 7',
            'Grade 8', 'Grade 9',
        ];
        foreach ($classNames as $className) {
            Classroom::create([
                'school_id' => $school->id,
                'name' => $className,
                'description' => $className.' Description',
            ]);
        }
    }
}
