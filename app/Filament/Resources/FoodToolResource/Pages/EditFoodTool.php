<?php

namespace App\Filament\Resources\FoodToolResource\Pages;

use App\Filament\Resources\FoodToolResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFoodTool extends EditRecord
{
    protected static string $resource = FoodToolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
