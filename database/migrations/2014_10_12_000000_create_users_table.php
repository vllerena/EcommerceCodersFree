<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\UserAttr;

class CreateUsersTable extends Migration
{
    private const USER_TABLE = UserAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::USER_TABLE, function (Blueprint $table) {
            $table->id(UserAttr::ID);
            $table->string(UserAttr::NAME);
            $table->string(UserAttr::EMAIL)->unique();
            $table->timestamp(UserAttr::EMAIL_VERIFIED_AT)->nullable();
            $table->string(UserAttr::PASSWORD);
            $table->rememberToken();
            $table->foreignId(UserAttr::CURRENT_TEAM_ID)->nullable();
            $table->string(UserAttr::PROFILE_PHOTO_PATH, 2048)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::USER_TABLE);
    }
}
