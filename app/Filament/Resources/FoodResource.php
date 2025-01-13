<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Food;
use App\Models\Tool;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use App\Models\Ingredient;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FoodResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FoodResource\RelationManagers;

class FoodResource extends Resource
{
    protected static ?string $model = Food::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('time')
                    ->label('Preparation Time')
                    ->required()
                    ->placeholder('duration in minute')
                    ->maxLength(50),
                Textarea::make('desc')
                    ->label('Description')
                    ->maxLength(500),
                FileUpload::make('photo')
                    ->label('Photo')
                    ->image()
                    ->directory('foods')
                    ->maxSize(1024)
                    ->required(),
                TextInput::make('link')
                    ->label('External Link Video')
                    ->url()
                    ->placeholder('e.g., https://youtube.com/...')
                    ->maxLength(255)
                    ->required(),

                    // Categories (Many-to-Many with Pivot)
Repeater::make('foodCategories')
->relationship('foodCategories') // Relasi ke pivot table
->schema([
    Select::make('category_id')
        ->label('Category')
        ->options(Category::all()->pluck('name', 'id')) // Menampilkan opsi kategori
        ->required()
        ->searchable(),
])
->label('Categories')
->createItemButtonLabel('Add Category')
->columns(1), // Mengatur layout


                // Repeater::make('categories')
                // ->relationship('foodCategories') // Hubungkan dengan relasi Tools
                // ->schema([
                //     Select::make('categories_id')
                //         ->label('Catageories')
                //         ->options(Category::all()->pluck('name', 'id')) // Pilihan bahan
                //         ->required()
                //         ->searchable(),
                // ])
                // ->label('Categories')
                // ->createItemButtonLabel('Add Categories'),

                    // Repeater::make('categories')
                    // ->label('Categories')
                    // ->relationship('categories') // Menentukan relasi many-to-many
                    // ->schema([
                    //     Select::make('id')
                    //         ->label('Category')
                    //         ->relationship('categories', 'name') // Relasi ke model Category
                    //         ->required(),
                    // ])
                    // ->columns(1),

                // Repeater::make('tutorials')
                //     ->label('Tutorials')
                //     ->relationship('tutorials') // Relasi one-to-many
                //     ->schema([
                //         Textarea::make('name')
                //             ->label('Tutorial Teks')
                //             ->required(),
                //     ])
                //     ->columns(1),

                    Repeater::make('tutorials')
                ->relationship('tutorials')
                ->schema([
                    Textarea::make('name')
                            ->label('Tutorial Teks')
                            ->required(),
                ]),

                Repeater::make('foodIngredients')
                ->relationship('foodIngredients') // Hubungkan dengan relasi ingredients
                ->schema([
                    Select::make('ingredient_id')
                        ->label('Ingredient')
                        ->options(Ingredient::all()->pluck('name', 'id')) // Pilihan bahan
                        ->required()
                        ->searchable(),

                    TextInput::make('quantity')
                        ->label('Quantity') // Tambahkan kolom untuk jumlah bahan
                        ->required()
                        ->placeholder('e.g., 200 grams/pcs'),
                ])
                ->label('Ingredients')
                ->createItemButtonLabel('Add Ingredient')
                ->columns(2), // Mengatur layout

                Repeater::make('foodTools')
                ->relationship('foodTools') // Hubungkan dengan relasi Tools
                ->schema([
                    Select::make('tool_id')
                        ->label('Tools')
                        ->options(Tool::all()->pluck('name', 'id')) // Pilihan bahan
                        ->required()
                        ->searchable(),
                ])
                ->label('Tools')
                ->createItemButtonLabel('Add Tools'),




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('Food Name'),
                TextColumn::make('time')
                    ->label('Preparation Time'),
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Photo')
                    ->size(50),
                TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('tutorial.name'),

                TextColumn::make('ingredients.name')
                    ->label('Ingredients')
                    ->limit(50),
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
            'index' => Pages\ListFood::route('/'),
            'create' => Pages\CreateFood::route('/create'),
            'edit' => Pages\EditFood::route('/{record}/edit'),
        ];
    }
}
