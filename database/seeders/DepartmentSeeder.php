<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Department;
use App\Models\District;
use App\Models\Info\CityAttr;
use App\Models\Info\DepartmentAttr;
use App\Models\Info\DistrictAttr;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{

    public function run()
    {
        Department::create([
            DepartmentAttr::NAME => 'Cajamarca',
        ]);
//        Department::factory(8)->create()->each(function (Department $department){
//            City::factory(8)->create([
//                CityAttr::DEPARTMENT_ID => $department->id
//            ])->each(function (City $city) {
//                District::factory(8)->create([
//                    DistrictAttr::CITY_ID => $city->id,
//                ]);
//            });
//        });
    }
}
