<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\School;
use App\Models\Classroom;

class FeeSeeder extends Seeder
{
    public function run()
    {
        $school = School::first();
        $classrooms = Classroom::all();

        if (! $school || $classrooms->isEmpty()) {
            $this->command->warn('Ensure schools and classrooms are seeded first.');
            return;
        }

        foreach ($classrooms as $classroom) {
            $term1 = rand(10000, 20000);
            $term2 = rand(10000, 20000);
            $term3 = rand(10000, 20000); 

            DB::table('fees')->insert([
                'school_id'     => $school->id,
                'classroom_id'  => $classroom->id,
                'term_1_amount' => $term1,
                'term_2_amount' => $term2,
                'term_3_amount' => $term3, 
                'year'          => date('Y'),
                'description'   => 'Annual fees for ' . $classroom->name,
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }

        $this->command->info('Fees seeded for all classrooms.');
    }
}
