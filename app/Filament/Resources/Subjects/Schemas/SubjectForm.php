<?php

namespace App\Filament\Resources\Subjects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SubjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('institution_id')
                    ->required()
                    ->numeric(),
                TextInput::make('class_id')
                    ->numeric(),
                TextInput::make('teacher_id')
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('code'),
            ]);
    }
}
