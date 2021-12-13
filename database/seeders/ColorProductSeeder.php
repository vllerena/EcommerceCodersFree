<?php

namespace Database\Seeders;

use App\Models\ColorProduct;
use App\Models\Info\ColorProductAttr;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class ColorProductSeeder extends Seeder
{
    public function run()
    {
        $products = Product::whereHas('subcategory', function (Builder $query){
            $query->where('color', true)
                ->where('size', false);
        })->get();

        foreach ($products as $product){
            $product->colors()->attach([
                1 => [
                    ColorProductAttr::QUANTITY => 10
                ],
                2 => [
                    ColorProductAttr::QUANTITY => 10
                ],
                3 => [
                    ColorProductAttr::QUANTITY => 10
                ],
                4 => [
                    ColorProductAttr::QUANTITY => 10
                ],
            ]);
        }
    }
}
