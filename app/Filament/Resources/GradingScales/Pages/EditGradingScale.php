<?php

namespace App\Filament\Resources\GradingScales\Pages;

use App\Filament\Resources\GradingScales\GradingScaleResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditGradingScale extends EditRecord
{
    protected static string $resource = GradingScaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
