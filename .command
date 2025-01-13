php artisan make:model Category -m
php artisan make:model Tutorial -m
php artisan make:model Food -m
php artisan make:model Ingredient -m
php artisan make:model Tool -m
php artisan make:model FoodIngredient -m
php artisan make:model FoodTool -m
php artisan make:model Bookmark -m
php artisan make:model FoodCategory -m

php artisan make:controller FrontController
php artisan make:controller UserController

php artisan make:filament-resource Category
php artisan make:filament-resource Food
php artisan make:filament-resource FoodIngredient
php artisan make:filament-resource FoodTool
php artisan make:filament-resource Tutorial
php artisan make:filament-resource User

php artisan make:filament-resource Ingredient
php artisan make:filament-resource Tool


