<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\ColorAttr;

class CreateColorsTable extends Migration
{
    private const COLOR_TABLE = ColorAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::COLOR_TABLE, function (Blueprint $table) {
            $table->id(ColorAttr::ID);
            $table->string(ColorAttr::NAME);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::COLOR_TABLE);
    }
}
