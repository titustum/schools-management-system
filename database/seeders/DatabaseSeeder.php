<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // make a default school
        $school = \App\Models\School::create([
            'name' => 'Nandi Comprehensive School',
            'phone' => '0716234567',
            'county' => 'Nandi County',
            'sub_county' => 'Nandi Sub-County',
            'logo' => null,
        ]);

        // create an admin user for the default school
        \App\Models\User::create([
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'school_id' => $school->id,
        ]);
    }
}
