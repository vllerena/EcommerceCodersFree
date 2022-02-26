<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Info\CityAttr;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run()
    {
        City::create([
            CityAttr::NAME => 'Cajamarca',
            CityAttr::COST => 5.00,
            CityAttr::DEPARTMENT_ID => 1,
        ]);
    }
}
