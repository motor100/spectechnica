<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    /**
     * Один к одному
     * Получить изображение для этой категории
     */
    public function image(): HasOne
    {
        return $this->hasOne(CategoryImage::class);
    }
}
