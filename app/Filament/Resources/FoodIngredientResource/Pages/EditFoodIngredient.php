<?php

namespace App\Filament\Resources\FoodIngredientResource\Pages;

use App\Filament\Resources\FoodIngredientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFoodIngredient extends EditRecord
{
    protected static string $resource = FoodIngredientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
