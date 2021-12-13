<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\ImageAttr;

class CreateImagesTable extends Migration
{
    private const IMAGE_TABLE = ImageAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::IMAGE_TABLE, function (Blueprint $table) {
            $table->id(ImageAttr::ID);
            $table->string(ImageAttr::URL);
            $table->unsignedBigInteger(ImageAttr::IMAGEABLE_ID);
            $table->string(ImageAttr::IMAGEABLE_TYPE);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::IMAGE_TABLE);
    }
}
