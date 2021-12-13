<?php

namespace App\Models;

use App\Models\Info\ColorAttr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = ColorAttr::TABLE_NAME;

    public const CREATED_AT = ColorAttr::CREATED_AT;
    public const UPDATED_AT = ColorAttr::UPDATED_AT;

    protected $fillable = [
        ColorAttr::NAME,
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
}
