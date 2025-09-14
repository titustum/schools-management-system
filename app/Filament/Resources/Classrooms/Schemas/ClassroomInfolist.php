<?php

namespace App\Filament\Resources\Classrooms\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ClassroomInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Classroom details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('school.name'),
                        TextEntry::make('name'),
                        TextEntry::make('stream'),
                        TextEntry::make('description'),
                        TextEntry::make('created_at')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->dateTime(),
                    ]),

            ]);
    }
}
