<?php

namespace App\Filament\Resources\Marks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MarkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('institution_id')
                    ->required()
                    ->numeric(),
                TextInput::make('student_id')
                    ->required()
                    ->numeric(),
                TextInput::make('subject_id')
                    ->required()
                    ->numeric(),
                TextInput::make('year')
                    ->required()
                    ->numeric(),
                TextInput::make('term')
                    ->required(),
                TextInput::make('score')
                    ->numeric(),
                TextInput::make('grade'),
                Textarea::make('remarks')
                    ->columnSpanFull(),
            ]);
    }
}
