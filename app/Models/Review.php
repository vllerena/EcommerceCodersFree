<?php

namespace App\Models;

use App\Models\Info\ReviewAttr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        ReviewAttr::USER_ID,
        ReviewAttr::PRODUCT_ID,
        ReviewAttr::RATING,
        ReviewAttr::COMMENT,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
