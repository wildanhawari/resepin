<?php

namespace App\Filament\Resources\FoodIngredientResource\Pages;

use App\Filament\Resources\FoodIngredientResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFoodIngredient extends CreateRecord
{
    protected static string $resource = FoodIngredientResource::class;
}
