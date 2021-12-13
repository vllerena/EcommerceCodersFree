<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\ProductAttr;
use App\Models\Info\SubcategoryAttr;
use App\Models\Info\BrandAttr;
use App\Models\Product;

class CreateProductsTable extends Migration
{
    private const PRODUCT_TABLE = ProductAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::PRODUCT_TABLE, function (Blueprint $table) {
            $table->id(ProductAttr::ID);
            $table->string(ProductAttr::NAME);
            $table->string(ProductAttr::SLUG);
            $table->text(ProductAttr::DESCRIPTION);
            $table->decimal(ProductAttr::PRICE);
            $table->foreignId(ProductAttr::SUBCATEGORY_ID)
                ->constrained(SubcategoryAttr::TABLE_NAME, SubcategoryAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreignId(ProductAttr::BRAND_ID)
                ->constrained(BrandAttr::TABLE_NAME, BrandAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->integer(ProductAttr::QUANTITY)->nullable();
            $table->enum(ProductAttr::STATUS, [Product::BORRADOR, Product::PUBLICADO])->default(Product::BORRADOR);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::PRODUCT_TABLE);
    }
}
