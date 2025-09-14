<?php

namespace App\Filament\Resources\Subjects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SubjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('school_id')
                    ->required()
                    ->numeric(),
                TextInput::make('classroom_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('code'),
                Toggle::make('is_core')
                    ->required(),
            ]);
    }
}
