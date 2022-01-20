<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\ReviewAttr;
use App\Models\Info\UserAttr;
use App\Models\Info\ProductAttr;

class CreateReviewsTable extends Migration
{
    private const REVIEW_TABLE = ReviewAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::REVIEW_TABLE, function (Blueprint $table) {
            $table->id(ReviewAttr::ID);
            $table->foreignId(ReviewAttr::USER_ID)
                ->constrained(UserAttr::TABLE_NAME, UserAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreignId(ReviewAttr::PRODUCT_ID)
                ->constrained(ProductAttr::TABLE_NAME, ProductAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->text(ReviewAttr::COMMENT);
            $table->integer(ReviewAttr::RATING);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::REVIEW_TABLE);
    }
}
