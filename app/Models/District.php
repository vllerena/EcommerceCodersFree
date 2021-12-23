<?php

namespace App\Models;

use App\Models\Info\DistrictAttr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = DistrictAttr::TABLE_NAME;

    protected $fillable = [
        DistrictAttr::NAME,
        DistrictAttr::CITY_ID,
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
