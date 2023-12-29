<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = "categories";
    protected $primrayKey = "id";
    protected $keyType = "int";
    public $incerementing = true;
    public $timestamps = true;

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, "category_id", "id");
    }
}
