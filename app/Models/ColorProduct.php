<?php

namespace App\Models;

use App\Models\Info\ColorProductAttr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorProduct extends Model
{
    use HasFactory;

    protected $table = ColorProductAttr::TABLE_NAME;

    public function color(){
        return $this->belongsTo(Color::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
