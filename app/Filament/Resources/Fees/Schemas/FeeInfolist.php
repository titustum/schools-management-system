<?php

namespace App\Filament\Resources\Fees\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class FeeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('school_id')
                    ->numeric(),
                TextEntry::make('classroom_id')
                    ->numeric(),
                TextEntry::make('term_1_amount')
                    ->numeric(),
                TextEntry::make('term_2_amount')
                    ->numeric(),
                TextEntry::make('term_3_amount')
                    ->numeric(),
                TextEntry::make('year'),
                TextEntry::make('description')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
