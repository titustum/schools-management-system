<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\GradingScale;
use App\Models\School;
use Illuminate\Database\Seeder;

class GradingScaleSeeder extends Seeder
{
    public function run(): void
    {
        $school = School::first();
        if (! $school) {
            $this->command->warn('No school found. Please seed the schools table first.');

            return;
        }

        // Common CBC grading scale
        $cbcScale = [
            ['from_mark' => 80, 'to_mark' => 100, 'grade' => 'Exceeding Expectations', 'points' => 4.0],
            ['from_mark' => 60, 'to_mark' => 79,  'grade' => 'Meeting Expectations',   'points' => 3.0],
            ['from_mark' => 40, 'to_mark' => 59,  'grade' => 'Approaching Expectations', 'points' => 1.0],
            ['from_mark' => 0,  'to_mark' => 39,  'grade' => 'Below Expectations',      'points' => 1.0],
        ];

        // Class levels under CBC system
        $cbcClasses = [
            'PP1', 'PP2', 'Grade 1', 'Grade 2', 'Grade 3',
            'Grade 4', 'Grade 5', 'Grade 6', 'Grade 7', 'Grade 8', 'Grade 9',
        ];

        foreach ($cbcClasses as $className) {
            $classroom = Classroom::where('name', $className)->first();

            if (! $classroom) {
                $this->command->warn("Classroom '{$className}' not found. Skipping...");

                continue;
            }

            foreach ($cbcScale as $scale) {
                GradingScale::create([
                    'school_id' => $school->id,
                    'classroom_id' => $classroom->id,
                    'from_mark' => $scale['from_mark'],
                    'to_mark' => $scale['to_mark'],
                    'grade' => $scale['grade'],
                    'points' => $scale['points'],
                ]);
            }
        }

        $this->command->info('CBC grading scales seeded successfully.');
    }
}
