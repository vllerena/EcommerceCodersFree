<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Info\CityAttr;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    protected $model = City::class;

    public function definition()
    {
        return [
            CityAttr::NAME => $this->faker->word(),
            CityAttr::COST => $this->faker->randomElement([5, 10, 15])
        ];
    }
}
