<?php

namespace App\Filament\Resources\Marks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MarksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('institution_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('student_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('subject_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('year')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('term')
                    ->searchable(),
                TextColumn::make('score')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('grade')
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
