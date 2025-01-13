<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Food extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'time',
        'desc',
        'photo',
        'link',
        'tutorial_id',
    ];

    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    // public function categories() : BelongsToMany {
    //     return $this->belongsToMany(Category::class, 'food_categories', 'food_id', 'category_id');
    // }

    public function tutorials() : HasMany {
        return $this->hasMany(Tutorial::class);
    }

    public function foodIngredients(): HasMany
    {
        return $this->hasMany(FoodIngredient::class);
    }

    public function foodTools(): HasMany {
        return $this->hasMany(FoodTool::class);
    }

    public function foodCategories(): HasMany {
        return $this->hasMany(FoodCategory::class);
    }

    public function bookmarkedByUsers()
    {
        return $this->belongsToMany(User::class, 'bookmarks', 'food_id', 'user_id')->withTimestamps();
    }


}
