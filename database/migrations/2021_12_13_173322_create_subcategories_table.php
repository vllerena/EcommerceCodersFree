<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\SubcategoryAttr;
use App\Models\Info\CategoryAttr;

class CreateSubcategoriesTable extends Migration
{
    private const SUBCATEGORY_TABLE = SubcategoryAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::SUBCATEGORY_TABLE, function (Blueprint $table) {
            $table->id(SubcategoryAttr::ID);
            $table->string(SubcategoryAttr::NAME);
            $table->string(SubcategoryAttr::SLUG);
            $table->string(SubcategoryAttr::IMAGE);
            $table->foreignId(SubcategoryAttr::CATEGORY_ID)
                ->constrained(CategoryAttr::TABLE_NAME, CategoryAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->boolean(SubcategoryAttr::COLOR)->default(false);
            $table->boolean(SubcategoryAttr::SIZE)->default(false);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::SUBCATEGORY_TABLE);
    }
}
