<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class StudentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('institution_id')
                    ->numeric(),
                TextEntry::make('class_id')
                    ->numeric(),
                TextEntry::make('parent_id')
                    ->numeric(),
                TextEntry::make('first_name'),
                TextEntry::make('last_name'),
                TextEntry::make('admission_number'),
                TextEntry::make('date_of_birth')
                    ->date(),
                TextEntry::make('gender'),
                TextEntry::make('photo_path'),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
