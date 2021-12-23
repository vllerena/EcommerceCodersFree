<?php

namespace App\Models;

use App\Models\Info\DepartmentAttr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = DepartmentAttr::TABLE_NAME;

    protected $fillable = [
        DepartmentAttr::NAME,
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
