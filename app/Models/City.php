<?php

namespace App\Models;

use App\Models\Info\CityAttr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = CityAttr::TABLE_NAME;

    protected $fillable = [
        CityAttr::NAME,
        CityAttr::COST,
        CityAttr::DEPARTMENT_ID,
    ];

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
