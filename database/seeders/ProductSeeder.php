<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Info\ImageAttr;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::factory(250)->create()->each(function (Product $product){
            Image::factory(4)->create([
                ImageAttr::IMAGEABLE_ID => $product->id,
                ImageAttr::IMAGEABLE_TYPE => Product::class,
            ]);
        });
    }
}
