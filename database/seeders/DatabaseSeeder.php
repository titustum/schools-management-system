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
            'name' => 'Default School',
            'phone' => '123-456-7890',
            'county' => 'Default County',
            'sub_county' => 'Default Sub-County',
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
