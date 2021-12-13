<?php

namespace App\Models;

use App\Models\Info\SizeAttr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $table = SizeAttr::TABLE_NAME;

    public const CREATED_AT = SizeAttr::CREATED_AT;
    public const UPDATED_AT = SizeAttr::UPDATED_AT;

    protected $fillable = [
        SizeAttr::NAME,
        SizeAttr::PRODUCT_ID,
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
