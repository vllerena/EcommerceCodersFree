<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Info\CategoryAttr;

class Category extends Model
{
    use HasFactory;

    protected $table = CategoryAttr::TABLE_NAME;

    public const CREATED_AT = CategoryAttr::CREATED_AT;
    public const UPDATED_AT = CategoryAttr::UPDATED_AT;

    protected $fillable = [
        CategoryAttr::NAME,
        CategoryAttr::SLUG,
        CategoryAttr::IMAGE,
        CategoryAttr::ICON,
    ];

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
