<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\DistrictAttr;
use App\Models\Info\CityAttr;

class CreateDistrictsTable extends Migration
{
    private const DISTRICT_TABLE = DistrictAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::DISTRICT_TABLE, function (Blueprint $table) {
            $table->id(DistrictAttr::ID);
            $table->string(DistrictAttr::NAME);
            $table->foreignId(DistrictAttr::CITY_ID)
                ->constrained(CityAttr::TABLE_NAME, CityAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::DISTRICT_TABLE);
    }
}
