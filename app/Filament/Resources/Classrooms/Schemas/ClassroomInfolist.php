<?php

namespace App\Filament\Resources\Classrooms\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ClassroomInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('institution_id')
                    ->numeric(),
                TextEntry::make('teacher_id')
                    ->numeric(),
                TextEntry::make('name'),
                TextEntry::make('level'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
