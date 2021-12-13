<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\BrandAttr;

class CreateBrandsTable extends Migration
{
    private const BRAND_TABLE = BrandAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::BRAND_TABLE, function (Blueprint $table) {
            $table->id(BrandAttr::ID);
            $table->string(BrandAttr::NAME);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::BRAND_TABLE);
    }
}
