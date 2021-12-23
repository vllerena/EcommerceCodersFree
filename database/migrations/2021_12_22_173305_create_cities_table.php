<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\CityAttr;
use App\Models\Info\DepartmentAttr;

class CreateCitiesTable extends Migration
{
    private const CITY_TABLE = CityAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::CITY_TABLE, function (Blueprint $table) {
            $table->id(CityAttr::ID);
            $table->string(CityAttr::NAME);
            $table->foreignId(CityAttr::DEPARTMENT_ID)
                ->constrained(DepartmentAttr::TABLE_NAME, DepartmentAttr::ID)
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->float(CityAttr::COST);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::CITY_TABLE);
    }
}
