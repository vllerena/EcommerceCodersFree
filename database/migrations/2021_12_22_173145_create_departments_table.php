<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Info\DepartmentAttr;

class CreateDepartmentsTable extends Migration
{
    private const DEPARTMENT_TABLE = DepartmentAttr::TABLE_NAME;
    public function up()
    {
        Schema::create(self::DEPARTMENT_TABLE, function (Blueprint $table) {
            $table->id(DepartmentAttr::ID);
            $table->string(DepartmentAttr::NAME);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(self::DEPARTMENT_TABLE);
    }
}
