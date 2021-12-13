<?php

namespace Database\Factories;

use App\Models\Info\ProductAttr;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $name = $this->faker->sentence(2);

        $subcategory = Subcategory::all()->random();
        $category = $subcategory->category;
        $brand = $category->brands->random();

        if ($subcategory->color){
            $quantity = null;
        } else {
            $quantity = 15;
        }

        return [
            ProductAttr::NAME => $name,
            ProductAttr::SLUG => Str::slug($name),
            ProductAttr::DESCRIPTION => $this->faker->text(),
            ProductAttr::PRICE => $this->faker->randomElement([19.99, 49.99, 99.99]),
            ProductAttr::SUBCATEGORY_ID => $subcategory->id,
            ProductAttr::BRAND_ID => $brand->id,
            ProductAttr::QUANTITY => $quantity,
            ProductAttr::STATUS => 2,
        ];
    }
}
