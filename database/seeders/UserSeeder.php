<?php
 
namespace Database\Seeders;

use App\Models\User;
use App\Models\Institution;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $institutions = Institution::all();

        if ($institutions->count() < 3) {
            $this->command->warn("Please seed at least 3 institutions before running the UserSeeder.");
            return;
        }

        $users = [
            [
                'name' => 'Alice Mwangi',
                'email' => 'alice@greenvalley.ac.ke',
                'role' => 'admin',
                'institution_id' => $institutions[0]->id,
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'James Otieno',
                'email' => 'james@starlightschool.ke',
                'role' => 'teacher',
                'institution_id' => $institutions[1]->id,
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Sarah Njeri',
                'email' => 'sarah@brightminds.ke',
                'role' => 'teacher',
                'institution_id' => $institutions[2]->id,
                'password' => Hash::make('password123'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
