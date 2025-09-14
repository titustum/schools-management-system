<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fees structures
        // start with PP1 to Grade 9
        $school = \App\Models\School::first() ?? 1; // assuming a default school exists
        $feeStructures = [
            'PP1' => 1000,
            'PP2' => 1000,
            'Grade 1' => 1500,
            'Grade 2' => 1500,
            'Grade 3' => 2000,
            'Grade 4' => 2000,
            'Grade 5' => 2500,
            'Grade 6' => 2500,
            'Grade 7' => 3000,
            'Grade 8' => 3000,
            'Grade 9' => 3500,
        ];

        foreach ($feeStructures as $className => $amount) {
            \App\Models\Fee::create([
                'school_id' => $school->id,
                'classroom_id' => Classroom::where('name', $className)->first()->id,
                'amount' => $amount,
            ]);
        }
    }
}
