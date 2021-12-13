<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\CategoryAttr;

class CreateCategoriesTable extends Migration
{
    private const CATEGORY_TABLE = CategoryAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::CATEGORY_TABLE, function (Blueprint $table) {
            $table->id(CategoryAttr::ID);
            $table->string(CategoryAttr::NAME);
            $table->string(CategoryAttr::SLUG);
            $table->string(CategoryAttr::IMAGE);
            $table->string(CategoryAttr::ICON);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::CATEGORY_TABLE);
    }
}
