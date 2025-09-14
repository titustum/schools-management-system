<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GradingScaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //add grading scales for PP1 to Grade 9
        $school = \App\Models\School::first() ?? 1; // assuming a default school exists
        $gradingScales = [
            'PP1' => [
                ['from_mark' => 90, 'to_mark' => 100, 'grade' => 'A', 'points' => 4.0],
                ['from_mark' => 80, 'to_mark' => 89, 'grade' => 'B+', 'points' => 3.5],
                ['from_mark' => 70, 'to_mark' => 79, 'grade' => 'B', 'points' => 3.0],
                ['from_mark' => 60, 'to_mark' => 69, 'grade' => 'C+', 'points' => 2.5],
                ['from_mark' => 50, 'to_mark' => 59, 'grade' => 'C', 'points' => 2.0],
                ['from_mark' => 40, 'to_mark' => 49, 'grade' => 'D+', 'points' => 1.5],
                ['from_mark' => 30, 'to_mark' => 39, 'grade' => 'D', 'points' => 1.0],
                ['from_mark' => 0, 'to_mark' => 29, 'grade' => 'F', 'points' => 0.0],
            ],
            'PP2' => [
                ['from_mark' => 90, 'to_mark' => 100, 'grade' => 'A', 'points' => 4.0],
                ['from_mark' => 80, 'to_mark' => 89, 'grade' => 'B+', 'points' => 3.5],
                ['from_mark' => 70, 'to_mark' => 79, 'grade' => 'B', 'points' => 3.0],
                ['from_mark' => 60, 'to_mark' => 69, 'grade' => 'C+', 'points' => 2.5],
                ['from_mark' => 50, 'to_mark' => 59, 'grade' => 'C', 'points' => 2.0],
                ['from_mark' => 40, 'to_mark' => 49, 'grade' => 'D+', 'points' => 1.5],
                ['from_mark' => 30, 'to_mark' => 39, 'grade' => 'D', 'points' => 1.0],
                ['from_mark' => 0, 'to_mark' => 29, 'grade' => 'F', 'points' => 0.0],
            ],
            'Grade 1' => [
                ['from_mark' => 90, 'to_mark' => 100, 'grade' => 'A', 'points' => 4.0],
                ['from_mark' => 80, 'to_mark' => 89, 'grade' => 'B+', 'points' => 3.5],
                ['from_mark' => 70, 'to_mark' => 79, 'grade' => 'B', 'points' => 3.0],
                ['from_mark' => 60, 'to_mark' => 69, 'grade' => 'C+', 'points' => 2.5],
                ['from_mark' => 50, 'to_mark' => 59, 'grade' => 'C', 'points' => 2.0],
                ['from_mark' => 40, 'to_mark' => 49, 'grade' => 'D+', 'points' => 1.5],
                ['from_mark' => 30, 'to_mark' => 39, 'grade' => 'D', 'points' => 1.0],
                ['from_mark' => 0, 'to_mark' => 29, 'grade' => 'F', 'points' => 0.0],
            ],
            'Grade 2' => [
                ['from_mark' => 90, 'to_mark' => 100, 'grade' => 'A', 'points' => 4.0],
                ['from_mark' => 80, 'to_mark' => 89, 'grade' => 'B+', 'points' => 3.5],
                ['from_mark' => 70, 'to_mark' => 79, 'grade' => 'B', 'points' => 3.0],
                ['from_mark' => 60, 'to_mark' => 69, 'grade' => 'C+', 'points' => 2.5],
                ['from_mark' => 50, 'to_mark' => 59, 'grade' => 'C', 'points' => 2.0],
                ['from_mark' => 40, 'to_mark' => 49, 'grade' => 'D+', 'points' => 1.5],
                ['from_mark' => 30, 'to_mark' => 39, 'grade' => 'D', 'points' => 1.0],
                ['from_mark' => 0, 'to_mark' => 29, 'grade' => 'F', 'points' => 0.0],
            ],
            'Grade 3' => [
                ['from_mark' => 90, 'to_mark' => 100, 'grade' => 'A', 'points' => 4.0],
                ['from_mark' => 80, 'to_mark' => 89, 'grade' => 'B+', 'points' => 3.5],
                ['from_mark' => 70, 'to_mark' => 79, 'grade' => 'B', 'points' => 3.0],
                ['from_mark' => 60, 'to_mark' => 69, 'grade' => 'C+', 'points' => 2.5],
                ['from_mark' => 50, 'to_mark' => 59, 'grade' => 'C', 'points' => 2.0],
                ['from_mark' => 40, 'to_mark' => 49, 'grade' => 'D+', 'points' => 1.5],
                ['from_mark' => 30, 'to_mark' => 39, 'grade' => 'D', 'points' => 1.0],
                ['from_mark' => 0, 'to_mark' => 29, 'grade' => 'F', 'points' => 0.0],
            ],
            'Grade 4' => [
                ['from_mark' => 90, 'to_mark' => 100, 'grade' => 'A', 'points' => 4.0],
                ['from_mark' => 80, 'to_mark' => 89, 'grade' => 'B+', 'points' => 3.5],
                ['from_mark' => 70, 'to_mark' => 79, 'grade' => 'B', 'points' => 3.0],
                ['from_mark' => 60, 'to_mark' => 69, 'grade' => 'C+', 'points' => 2.5],
                ['from_mark' => 50, 'to_mark' => 59, 'grade' => 'C', 'points' => 2.0],
                ['from_mark' => 40, 'to_mark' => 49, 'grade' => 'D+', 'points' => 1.5],
                ['from_mark' => 30, 'to_mark' => 39, 'grade' => 'D', 'points' => 1.0],
                ['from_mark' => 0, 'to_mark' => 29, 'grade' => 'F', 'points' => 0.0],
            ],

        ];

        foreach ($gradingScales as $className => $scales) {
            $classroom = \App\Models\Classroom::where('name', $className)->first();
            if (!$classroom) {
                continue; // skip if classroom not found
            }
            foreach ($scales as $scale) {
                \App\Models\GradingScale::create([
                    'school_id' => $school->id,
                    'classroom_id' => $classroom->id,
                    'from_mark' => $scale['from_mark'],
                    'to_mark' => $scale['to_mark'],
                    'grade' => $scale['grade'],
                    'points' => $scale['points'],
                ]);
            }
        }
    }
}
