<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Info\BrandAttr;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    protected $model = Brand::class;

    public function definition()
    {
        return [
            BrandAttr::NAME => $this->faker->word()
        ];
    }
}
