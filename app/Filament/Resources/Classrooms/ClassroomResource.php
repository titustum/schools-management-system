<?php

namespace App\Filament\Resources\Classrooms;

use App\Filament\Resources\Classrooms\Pages\CreateClassroom;
use App\Filament\Resources\Classrooms\Pages\EditClassroom;
use App\Filament\Resources\Classrooms\Pages\ListClassrooms;
use App\Filament\Resources\Classrooms\Pages\ViewClassroom;
use App\Filament\Resources\Classrooms\Schemas\ClassroomForm;
use App\Filament\Resources\Classrooms\Schemas\ClassroomInfolist;
use App\Filament\Resources\Classrooms\Tables\ClassroomsTable;
use App\Models\Classroom;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClassroomResource extends Resource
{
    protected static ?string $model = Classroom::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ClassroomForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ClassroomInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClassroomsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListClassrooms::route('/'),
            'create' => CreateClassroom::route('/create'),
            'view' => ViewClassroom::route('/{record}'),
            'edit' => EditClassroom::route('/{record}/edit'),
        ];
    }
}
