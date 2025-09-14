<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('school.name') 
                //     ->sortable(),
                TextColumn::make('classroom.name')
                    ->sortable(),
                TextColumn::make('admission_no')
                    ->searchable(),
                TextColumn::make('full_name')
                    ->searchable(),
                TextColumn::make('gender')
                    ->searchable(),
                TextColumn::make('dob')
                    ->date()
                    ->sortable(),
                TextColumn::make('parent_name')
                    ->searchable(),
                TextColumn::make('parent_phone')
                    ->searchable(),
                TextColumn::make('photo')
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
