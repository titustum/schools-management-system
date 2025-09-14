<?php

namespace App\Filament\Resources\Fees\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FeesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('school.name')
                //     ->numeric()
                //     ->sortable(),
                TextColumn::make('classroom.name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('term_1_amount')
                    ->label('Term 1 Fees ')
                    ->prefix('Ksh. ')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('term_2_amount')
                    ->label('Term 2 Fees ')
                    ->prefix('Ksh. ')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('term_3_amount')
                    ->label('Term 3 Fees ')
                    ->prefix('Ksh. ')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('amount')
                    ->label('Total Fees ')
                    ->prefix('Ksh. ')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('year')
                    ->searchable(),
                TextColumn::make('description')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
