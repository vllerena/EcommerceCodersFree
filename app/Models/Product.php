<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Info\ProductAttr;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = '1';
    const PUBLICADO = '2';

    protected $table = ProductAttr::TABLE_NAME;

    public const CREATED_AT = ProductAttr::CREATED_AT;
    public const UPDATED_AT = ProductAttr::UPDATED_AT;

    protected $fillable = [
        ProductAttr::NAME,
        ProductAttr::SLUG,
        ProductAttr::DESCRIPTION,
        ProductAttr::PRICE,
        ProductAttr::SUBCATEGORY_ID,
        ProductAttr::BRAND_ID,
        ProductAttr::QUANTITY,
        ProductAttr::STATUS,
    ];

    protected $guarded = [
        ProductAttr::ID,
        ProductAttr::CREATED_AT,
        ProductAttr::UPDATED_AT,
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, "imageable");
    }

}
