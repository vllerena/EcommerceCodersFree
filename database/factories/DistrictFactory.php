<?php

namespace Database\Factories;

use App\Models\District;
use App\Models\Info\DistrictAttr;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistrictFactory extends Factory
{
    protected $model = District::class;

    public function definition()
    {
        return [
            DistrictAttr::NAME => $this->faker->word(),
        ];
    }
}
