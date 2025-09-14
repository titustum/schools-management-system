<?php

namespace App\Filament\Resources\GradingScales\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GradingScaleForm
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
                TextInput::make('from_mark')
                    ->required()
                    ->numeric(),
                TextInput::make('to_mark')
                    ->required()
                    ->numeric(),
                TextInput::make('grade')
                    ->required(),
                TextInput::make('points')
                    ->numeric(),
            ]);
    }
}
