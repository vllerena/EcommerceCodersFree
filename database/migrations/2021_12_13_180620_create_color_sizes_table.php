<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\ColorSizeAttr;
use App\Models\Info\ColorAttr;
use App\Models\Info\SizeAttr;

class CreateColorSizesTable extends Migration
{
    private const COLOR_SIZE_TABLE = ColorSizeAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::COLOR_SIZE_TABLE, function (Blueprint $table) {
            $table->id(ColorSizeAttr::ID);
            $table->foreignId(ColorSizeAttr::COLOR_ID)
                ->constrained(ColorAttr::TABLE_NAME, ColorAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreignId(ColorSizeAttr::SIZE_ID)
                ->constrained(SizeAttr::TABLE_NAME, SizeAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->integer(ColorSizeAttr::QUANTITY);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::COLOR_SIZE_TABLE);
    }
}
