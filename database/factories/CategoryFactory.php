<?php

namespace Database\Factories;

use App\Models\Info\CategoryAttr;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            CategoryAttr::IMAGE => CategoryAttr::TABLE_NAME . '/' . $this->faker->image('public/storage/' . CategoryAttr::TABLE_NAME, 640, 480, null, false)
        ];
    }
}
