<?php

namespace Database\Seeders;

use App\Models\Institution;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InstitutionSeeder extends Seeder
{
    public function run(): void
    {
        $institutions = [
            [
                'name' => 'Green Valley Primary School',
                'type' => 'primary',
                'address' => 'P.O. Box 123, Green Town',
                'phone' => '0722123456',
                'email' => 'info@greenvalley.ac.ke',
                'location' => 'Kiambu County',
                'vision' => 'To be a leading center of academic excellence.',
                'mission' => 'To provide quality education that nurtures holistic growth.',
            ],
            [
                'name' => 'Starlight Junior Secondary',
                'type' => 'secondary',
                'address' => '456 Star Road, Nairobi',
                'phone' => '0711223344',
                'email' => 'admin@starlightschool.ke',
                'location' => 'Nairobi County',
                'vision' => 'To shape future leaders through modern education.',
                'mission' => 'Deliver quality learning experiences that build character and competence.',
            ],
            [
                'name' => 'Bright Minds ECDE Center',
                'type' => 'primary',
                'address' => '789 Rainbow Lane, Kisumu',
                'phone' => '0700556677',
                'email' => 'contact@brightminds.ke',
                'location' => 'Kisumu County',
                'vision' => 'Inspire young minds to shine from the start.',
                'mission' => 'Provide a nurturing environment for foundational learning.',
            ],
        ];

        foreach ($institutions as $data) {
            Institution::create(array_merge($data, [
                'slug' => Str::slug($data['name']),
                'logo_path' => null,
            ]));
        }
    }
}
