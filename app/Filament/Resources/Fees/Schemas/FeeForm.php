<?php

namespace App\Filament\Resources\Fees\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('school_id')
                    ->required()
                    ->numeric(),
                TextInput::make('classroom_id')
                    ->required()
                    ->numeric(),
                TextInput::make('term_1_amount')
                    ->required()
                    ->numeric(),
                TextInput::make('term_2_amount')
                    ->required()
                    ->numeric(),
                TextInput::make('term_3_amount')
                    ->required()
                    ->numeric(),
                TextInput::make('year')
                    ->required()
                    ->default('2025'),
                TextInput::make('description'),
            ]);
    }
}
