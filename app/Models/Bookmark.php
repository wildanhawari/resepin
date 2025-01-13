<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bookmark extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'food_id',
    ];

    // public function foods() : HasMany {
    //     return $this->hasMany(Food::class);
    // }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
