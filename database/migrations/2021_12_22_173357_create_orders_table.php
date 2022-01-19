<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\OrderAttr;
use App\Models\Info\UserAttr;
use App\Models\Order;
use App\Models\Info\DepartmentAttr;
use App\Models\Info\CityAttr;
use App\Models\Info\DistrictAttr;

class CreateOrdersTable extends Migration
{
    private const ORDER_TABLE = OrderAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::ORDER_TABLE, function (Blueprint $table) {
            $table->id(OrderAttr::ID);
            $table->foreignId(OrderAttr::USER_ID)
                ->constrained(UserAttr::TABLE_NAME, UserAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->string(OrderAttr::CONTACT);
            $table->string(OrderAttr::PHONE);
            $table->enum(OrderAttr::STATUS, [Order::PENDIENTE, Order::RECIBIDO, Order::ENVIADO, Order::ENTREGADO, Order::ANULADO])->default(Order::PENDIENTE);
            $table->enum(OrderAttr::SHIPPING_TYPE, [1, 2]);
            $table->float(OrderAttr::SHIPPING_COST);
            $table->float(OrderAttr::TOTAL);
            $table->json(OrderAttr::CONTENT);
//            $table->foreignId(OrderAttr::DEPARTMENT_ID)->nullable()
//                ->constrained(DepartmentAttr::TABLE_NAME, DepartmentAttr::ID)
//                ->onUpdate('CASCADE')
//                ->onDelete('CASCADE');
//            $table->foreignId(OrderAttr::CITY_ID)->nullable()
//                ->constrained(CityAttr::TABLE_NAME, CityAttr::ID)
//                ->onUpdate('CASCADE')
//                ->onDelete('CASCADE');
//            $table->foreignId(OrderAttr::DISTRICT_ID)->nullable()
//                ->constrained(DistrictAttr::TABLE_NAME, DistrictAttr::ID)
//                ->onUpdate('CASCADE')
//                ->onDelete('CASCADE');
            $table->json(OrderAttr::SEND)->nullable();
//            $table->string(OrderAttr::ADDRESS)->nullable();
//            $table->string(OrderAttr::REFERENCES)->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::ORDER_TABLE);
    }
}
