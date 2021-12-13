<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\BrandCategoryAttr;
use App\Models\Info\BrandAttr;
use App\Models\Info\CategoryAttr;

class CreateBrandCategoriesTable extends Migration
{
    private const BRAND_CATEGORY_TABLE = BrandCategoryAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::BRAND_CATEGORY_TABLE, function (Blueprint $table) {
            $table->id(BrandCategoryAttr::ID);
            $table->foreignId(BrandCategoryAttr::BRAND_ID)
                ->constrained(BrandAttr::TABLE_NAME, BrandAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreignId(BrandCategoryAttr::CATEGORY_ID)
                ->constrained(CategoryAttr::TABLE_NAME, CategoryAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::BRAND_CATEGORY_TABLE);
    }
}
