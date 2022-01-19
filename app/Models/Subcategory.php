<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Info\SubcategoryAttr;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = SubcategoryAttr::TABLE_NAME;

    public const CREATED_AT = SubcategoryAttr::CREATED_AT;
    public const UPDATED_AT = SubcategoryAttr::UPDATED_AT;

    protected $fillable = [
        SubcategoryAttr::NAME,
        SubcategoryAttr::SLUG,
        SubcategoryAttr::CATEGORY_ID,
        SubcategoryAttr::COLOR,
        SubcategoryAttr::SIZE,
    ];

    protected $guarded = [
        SubcategoryAttr::ID,
        SubcategoryAttr::CREATED_AT,
        SubcategoryAttr::UPDATED_AT,
    ];

    protected $casts = [
        SubcategoryAttr::COLOR => 'boolean',
        SubcategoryAttr::SIZE => 'boolean',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
