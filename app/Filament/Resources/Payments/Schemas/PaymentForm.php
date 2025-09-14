<?php

namespace App\Filament\Resources\Payments\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('school_id')
                    ->required()
                    ->numeric(),
                TextInput::make('student_id')
                    ->required()
                    ->numeric(),
                TextInput::make('classroom_id')
                    ->required()
                    ->numeric(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                TextInput::make('method'),
                TextInput::make('transaction_code'),
                TextInput::make('term')
                    ->required()
                    ->default('Term 1'),
                TextInput::make('year')
                    ->required()
                    ->default('2025'),
                DatePicker::make('date')
                    ->required(),
            ]);
    }
}
