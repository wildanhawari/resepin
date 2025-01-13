<?php

namespace App\Models;

use App\Models\Food;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tool extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
    ];

    public function foods() : BelongsToMany {
        return $this->belongsToMany(Food::class, 'food_tools', 'tool_id', 'food_id');
    }
}
