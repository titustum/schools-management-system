<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Institution;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    public function run(): void
    {
        $gradeLevelsByType = [
            'ecde' => ['PP1', 'PP2'],
            'primary' => ['Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5', 'Grade 6'],
            'secondary' => ['Grade 7', 'Grade 8', 'Grade 9'],
            'senior' => ['Grade 10', 'Grade 11', 'Grade 12'],
        ];

        $sectionNames = ['East', 'West', 'Central'];

        $institutions = Institution::all();

        foreach ($institutions as $institution) {
            $type = strtolower($institution->type);
            $levels = $gradeLevelsByType[$type] ?? ['General'];

            foreach ($levels as $level) {
                // Create 1–3 sections per level
                foreach (array_slice($sectionNames, 0, rand(1, 3)) as $section) {
                    Classroom::create([
                        'institution_id' => $institution->id,
                        'teacher_id' => null, // You can assign later
                        'name' => "{$level} {$section}",
                        'level' => $level,
                    ]);
                }
            }
        }
    }
}
