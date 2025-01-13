<?php

namespace App\Filament\Resources\FoodIngredientResource\Pages;

use App\Filament\Resources\FoodIngredientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFoodIngredients extends ListRecords
{
    protected static string $resource = FoodIngredientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
