<?php

namespace App\Models;

use App\Models\Info\BrandAttr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = BrandAttr::TABLE_NAME;

    public const CREATED_AT = BrandAttr::CREATED_AT;
    public const UPDATED_AT = BrandAttr::UPDATED_AT;

    protected $fillable = [
        BrandAttr::NAME,
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
