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
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                TextInput::make('term')
                    ->required()
                    ->default('Term 1'),
                TextInput::make('year')
                    ->required()
                    ->default('2025'),
                TextInput::make('description'),
            ]);
    }
}
