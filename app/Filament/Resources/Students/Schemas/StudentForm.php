<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Student details')
                ->columns(2)
                ->columnSpanFull()
                ->schema([ 
                    Hidden::make('school_id')
                        ->required()
                        ->default(auth()->user()->school->id),
                    Select::make('classroom_id')
                        ->required()
                        ->relationship('classroom', 'name'),
                    TextInput::make('admission_no')
                        ->required(),
                    TextInput::make('first_name')
                        ->required(),
                    TextInput::make('middle_name'),
                    TextInput::make('last_name')
                        ->required(),
                    TextInput::make('gender')
                        ->required(),
                    DatePicker::make('dob'),
                    TextInput::make('parent_name'),
                    TextInput::make('parent_phone')
                        ->tel(),
                    FileUpload::make('photo')
                        ->image()
                        ->maxSize(1024)
                        ->directory('students/photos')
                        ->disk('public')
                        ->imageEditor()
                        ->avatar(),
                ])
            ]);
    }
}
