<?php

namespace App\Filament\Resources\GradingScales\Pages;

use App\Filament\Resources\GradingScales\GradingScaleResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewGradingScale extends ViewRecord
{
    protected static string $resource = GradingScaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
