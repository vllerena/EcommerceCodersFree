<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\ColorProductAttr;
use App\Models\Info\ColorAttr;
use App\Models\Info\ProductAttr;

class CreateColorProductsTable extends Migration
{
    private const COLOR_PRODUCT_TABLE = ColorProductAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::COLOR_PRODUCT_TABLE, function (Blueprint $table) {
            $table->id(ColorProductAttr::ID);
            $table->foreignId(ColorProductAttr::COLOR_ID)
                ->constrained(ColorAttr::TABLE_NAME, ColorAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreignId(ColorProductAttr::PRODUCT_ID)
                ->constrained(ProductAttr::TABLE_NAME, ProductAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->integer(ColorProductAttr::QUANTITY);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::COLOR_PRODUCT_TABLE);
    }
}
