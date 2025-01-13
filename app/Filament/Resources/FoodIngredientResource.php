<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\FoodIngredient;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FoodIngredientResource\Pages;
use App\Filament\Resources\FoodIngredientResource\RelationManagers;

class FoodIngredientResource extends Resource
{
    protected static ?string $model = FoodIngredient::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Ingredient Name'),
                TextInput::make('quantity')
                    ->required()
                    ->label('Quantity')
                    ->maxLength(100),
                Repeater::make('foods')
                    ->label('Associated Foods')
                    ->relationship('foods') // Menentukan relasi many-to-many
                    ->schema([
                        Select::make('id')
                            ->label('Food')
                            ->relationship('foods', 'name') // Relasi ke model Food
                            ->required(),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListFoodIngredients::route('/'),
            'create' => Pages\CreateFoodIngredient::route('/create'),
            'edit' => Pages\EditFoodIngredient::route('/{record}/edit'),
        ];
    }
}
