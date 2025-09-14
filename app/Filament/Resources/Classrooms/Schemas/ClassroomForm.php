<?php

namespace App\Filament\Resources\Classrooms\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClassroomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('institution_id')
                    ->required()
                    ->numeric(),
                TextInput::make('teacher_id')
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('level')
                    ->required(),
            ]);
    }
}
