<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([ 
                Section::make('Student details')
                ->columns(2)
                ->columnSpanFull()
                ->schema([ 

                        TextEntry::make('school.name'),
                        TextEntry::make('classroom.name'),
                        TextEntry::make('admission_no'),
                        TextEntry::make('first_name'),
                        TextEntry::make('middle_name'),
                        TextEntry::make('last_name'),
                        TextEntry::make('gender'),
                        TextEntry::make('dob')
                            ->date(),
                        TextEntry::make('parent_name'),
                        TextEntry::make('parent_phone'),
                        ImageEntry::make('photo')->circular()
                            ->disk('public'), 
                        TextEntry::make('created_at')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->dateTime(),
                ])
            ]);
    }
}
