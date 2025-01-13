<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'desc',
    ];

    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function foods(): BelongsToMany {
        return $this->belongsToMany(Food::class, 'food_categories', 'category_id', 'food_id');
    }

    // public function foods() : BelongsToMany {
    //     return $this->belongsToMany(Food::class, 'food_ingredients', 'ingredient_id', 'food_id');
    // }
}
