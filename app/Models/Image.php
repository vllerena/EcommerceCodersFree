<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Info\ImageAttr;

class Image extends Model
{
    use HasFactory;

    protected $table = ImageAttr::TABLE_NAME;

    public const CREATED_AT = ImageAttr::CREATED_AT;
    public const UPDATED_AT = ImageAttr::UPDATED_AT;

    protected $fillable = [
        ImageAttr::URL,
        ImageAttr::IMAGEABLE_ID,
        ImageAttr::IMAGEABLE_TYPE,
    ];

    public function imageable()
    {
        return $this->morphTo();
    }
}
