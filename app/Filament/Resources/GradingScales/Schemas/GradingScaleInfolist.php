<?php

namespace App\Filament\Resources\GradingScales\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class GradingScaleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('school_id')
                    ->numeric(),
                TextEntry::make('classroom_id')
                    ->numeric(),
                TextEntry::make('from_mark')
                    ->numeric(),
                TextEntry::make('to_mark')
                    ->numeric(),
                TextEntry::make('grade'),
                TextEntry::make('points')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
