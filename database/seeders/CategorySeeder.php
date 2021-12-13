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
                CategoryAttr::NAME => 'Celulares y tables',
                CategoryAttr::SLUG => Str::slug('Celulares y tables'),
                CategoryAttr::ICON => '<i class="fas fa-mobile-alt"></i>',
            ],
            [
                CategoryAttr::NAME => 'TV, Audio y Video',
                CategoryAttr::SLUG => Str::slug('TV, Audio y Video'),
                CategoryAttr::ICON => '<i class="fas fa-tv"></i>',
            ],
            [
                CategoryAttr::NAME => 'Consola y Videojuegos',
                CategoryAttr::SLUG => Str::slug('Consola y Videojuegos'),
                CategoryAttr::ICON => '<i class="fas fa-gamepad"></i>',
            ],
            [
                CategoryAttr::NAME => 'Computación',
                CategoryAttr::SLUG => Str::slug('Computación'),
                CategoryAttr::ICON => '<i class="fas fa-laptop"></i>',
            ],
            [
                CategoryAttr::NAME => 'Moda',
                CategoryAttr::SLUG => Str::slug('Moda'),
                CategoryAttr::ICON => '<i class="fas fa-tshirt"></i>',
            ],
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();
            $brands = Brand::factory(4)->create();
            foreach ($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
}
