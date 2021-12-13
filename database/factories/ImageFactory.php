<?php

namespace Database\Factories;

use App\Models\Info\ImageAttr;
use App\Models\Info\ProductAttr;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Image;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition()
    {
        return [
            ImageAttr::URL => ProductAttr::TABLE_NAME . '/' . $this->faker->image('public/storage/' . ProductAttr::TABLE_NAME, 640, 400, null, false),
        ];
    }
}
