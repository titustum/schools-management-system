<?php

namespace App\Filament\Resources\Marks\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MarkInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('institution_id')
                    ->numeric(),
                TextEntry::make('student_id')
                    ->numeric(),
                TextEntry::make('subject_id')
                    ->numeric(),
                TextEntry::make('year')
                    ->numeric(),
                TextEntry::make('term'),
                TextEntry::make('score')
                    ->numeric(),
                TextEntry::make('grade'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
