<?php

namespace App\Models;

use App\Models\Info\OrderAttr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const PENDIENTE = 1;
    const RECIBIDO = 2;
    const ENVIADO = 3;
    const ENTREGADO = 4;
    const ANULADO = 5;

    protected $table = OrderAttr::TABLE_NAME;

    public const CREATED_AT = OrderAttr::CREATED_AT;
    public const UPDATED_AT = OrderAttr::UPDATED_AT;

    protected $guarded = [
        OrderAttr::ID,
        OrderAttr::CREATED_AT,
        OrderAttr::UPDATED_AT,
    ];

    protected $fillable = [
        OrderAttr::USER_ID,
        OrderAttr::CONTACT,
        OrderAttr::PHONE,
        OrderAttr::STATUS,
        OrderAttr::SHIPPING_TYPE,
        OrderAttr::SHIPPING_COST,
        OrderAttr::TOTAL,
        OrderAttr::CONTENT,
        OrderAttr::DEPARTMENT_ID,
        OrderAttr::CITY_ID,
        OrderAttr::DISTRICT_ID,
        OrderAttr::ADDRESS,
        OrderAttr::REFERENCES,
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
