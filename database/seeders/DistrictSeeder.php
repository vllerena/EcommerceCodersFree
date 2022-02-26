<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Info\DistrictAttr;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    public function run()
    {
        District::create([
            DistrictAttr::NAME => 'Cajamarca',
            DistrictAttr::CITY_ID => 1,
        ]);
    }
}
