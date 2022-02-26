<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Info\CategoryAttr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                CategoryAttr::NAME => 'Laptops y Tablets',
                CategoryAttr::SLUG => Str::slug('Laptops y Tablets'),
                CategoryAttr::ICON => '<i class="fas fa-laptop"></i>',
            ],
            [
                CategoryAttr::NAME => 'Computadoras',
                CategoryAttr::SLUG => Str::slug('Computadoras'),
                CategoryAttr::ICON => '<i class="fas fa-desktop"></i>',
            ],
            [
                CategoryAttr::NAME => 'Gamer',
                CategoryAttr::SLUG => Str::slug('Gamer'),
                CategoryAttr::ICON => '<i class="fas fa-gamepad"></i>',
            ],
            [
                CategoryAttr::NAME => 'Partes de PC',
                CategoryAttr::SLUG => Str::slug('Partes de PC'),
                CategoryAttr::ICON => '<i class="fas fa-hdd-o"></i>',
            ],
            [
                CategoryAttr::NAME => 'Monitores',
                CategoryAttr::SLUG => Str::slug('Monitores'),
                CategoryAttr::ICON => '<i class="fas fa-television"></i>',
            ],
            [
                CategoryAttr::NAME => 'Impresoras',
                CategoryAttr::SLUG => Str::slug('Impresoras'),
                CategoryAttr::ICON => '<i class="fas fa-print"></i>',
            ],
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();
//            $brands = Brand::factory(1)->create();
            $brands = Brand::all();
            foreach ($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
}
