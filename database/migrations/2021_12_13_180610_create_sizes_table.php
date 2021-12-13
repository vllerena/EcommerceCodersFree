<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\SizeAttr;
use App\Models\Info\ProductAttr;

class CreateSizesTable extends Migration
{
    private const SIZE_TABLE = SizeAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::SIZE_TABLE, function (Blueprint $table) {
            $table->id(SizeAttr::ID);
            $table->string(SizeAttr::NAME);
            $table->foreignId(SizeAttr::PRODUCT_ID)
                ->constrained(ProductAttr::TABLE_NAME, ProductAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::SIZE_TABLE);
    }
}
