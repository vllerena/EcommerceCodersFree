<?php

namespace Database\Factories;

use App\Models\Info\SubcategoryAttr;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subcategory;

class SubcategoryFactory extends Factory
{
    protected $model = Subcategory::class;

    public function definition()
    {
        return [
            SubcategoryAttr::IMAGE => SubcategoryAttr::TABLE_NAME . '/' . $this->faker->image('public/storage/' . SubcategoryAttr::TABLE_NAME, 640, 480, null, false)
        ];
    }
}
