<?php

namespace App\Filament\Resources\Subjects\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SubjectInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('school_id')
                    ->numeric(),
                TextEntry::make('classroom_id')
                    ->numeric(),
                TextEntry::make('name'),
                TextEntry::make('code')
                    ->placeholder('-'),
                IconEntry::make('is_core')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
