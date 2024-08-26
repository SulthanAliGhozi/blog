<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use function PHPUnit\Framework\returnSelf;

class Category extends Model
{
    use HasFactory;

    public function posts(): HasMany 
    {
        return $this->hasMany(Post::class);
    }
}
