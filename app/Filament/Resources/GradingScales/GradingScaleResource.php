<?php

namespace App\Filament\Resources\GradingScales;

use App\Filament\Resources\GradingScales\Pages\CreateGradingScale;
use App\Filament\Resources\GradingScales\Pages\EditGradingScale;
use App\Filament\Resources\GradingScales\Pages\ListGradingScales;
use App\Filament\Resources\GradingScales\Pages\ViewGradingScale;
use App\Filament\Resources\GradingScales\Schemas\GradingScaleForm;
use App\Filament\Resources\GradingScales\Schemas\GradingScaleInfolist;
use App\Filament\Resources\GradingScales\Tables\GradingScalesTable;
use App\Models\GradingScale;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GradingScaleResource extends Resource
{
    protected static ?string $model = GradingScale::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'classroom_id';

    public static function form(Schema $schema): Schema
    {
        return GradingScaleForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return GradingScaleInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GradingScalesTable::configure($table);
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
            'index' => ListGradingScales::route('/'),
            'create' => CreateGradingScale::route('/create'),
            'view' => ViewGradingScale::route('/{record}'),
            'edit' => EditGradingScale::route('/{record}/edit'),
        ];
    }
}
