<?php

namespace App\Filament\Resources\Classrooms\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ClassroomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Classroom details')
                    ->columns(1)
                    ->columnSpanFull()
                    ->schema([
                        Hidden::make('school_id')
                            ->default(auth()->user()->school->id),
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('stream'),
                        Textarea::make('description')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
