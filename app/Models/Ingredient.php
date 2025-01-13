<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
    ];

    public function foods() : BelongsToMany {
        return $this->belongsToMany(Food::class, 'food_ingredients', 'ingredient_id', 'food_id');
    }


}
