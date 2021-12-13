<?php

namespace Database\Seeders;

use App\Models\Info\SubcategoryAttr;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    public function run()
    {
        $subcategories = [
            [
                SubcategoryAttr::CATEGORY_ID => 1,
                SubcategoryAttr::NAME => 'Celulares y Smartphones',
                SubcategoryAttr::SLUG => Str::slug('Celulares y Smartphones'),
                SubcategoryAttr::COLOR => true
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 1,
                SubcategoryAttr::NAME => 'Accesorios para celulares',
                SubcategoryAttr::SLUG => Str::slug('Accesorios para celulares'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 1,
                SubcategoryAttr::NAME => 'Smartwatches',
                SubcategoryAttr::SLUG => Str::slug('Smartwatches'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 2,
                SubcategoryAttr::NAME => 'Smart TV',
                SubcategoryAttr::SLUG => Str::slug('Smart TV'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 2,
                SubcategoryAttr::NAME => 'Audio',
                SubcategoryAttr::SLUG => Str::slug('Audio'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 2,
                SubcategoryAttr::NAME => 'Audio para Autos',
                SubcategoryAttr::SLUG => Str::slug('Audio para Autos'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 3,
                SubcategoryAttr::NAME => 'Xbox',
                SubcategoryAttr::SLUG => Str::slug('Xbox'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 3,
                SubcategoryAttr::NAME => 'Play Station',
                SubcategoryAttr::SLUG => Str::slug('Play Station'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 3,
                SubcategoryAttr::NAME => 'Videojuegos para PC',
                SubcategoryAttr::SLUG => Str::slug('Videojuegos para PC'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 3,
                SubcategoryAttr::NAME => 'Nintendo DS',
                SubcategoryAttr::SLUG => Str::slug('Nintendo DS'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 4,
                SubcategoryAttr::NAME => 'Portátiles',
                SubcategoryAttr::SLUG => Str::slug('Portátiles'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 4,
                SubcategoryAttr::NAME => 'PC de Escritorio',
                SubcategoryAttr::SLUG => Str::slug('PC de Escritorio'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 4,
                SubcategoryAttr::NAME => 'Almacenamiento',
                SubcategoryAttr::SLUG => Str::slug('Almacenamiento'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 4,
                SubcategoryAttr::NAME => 'Accesorios Computadoras',
                SubcategoryAttr::SLUG => Str::slug('Accesorios Computadoras'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 5,
                SubcategoryAttr::NAME => 'Mujeres',
                SubcategoryAttr::SLUG => Str::slug('Mujeres'),
                SubcategoryAttr::COLOR => true,
                SubcategoryAttr::SIZE => true,
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 5,
                SubcategoryAttr::NAME => 'Hombres',
                SubcategoryAttr::SLUG => Str::slug('Hombres'),
                SubcategoryAttr::COLOR => true,
                SubcategoryAttr::SIZE => true,
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 5,
                SubcategoryAttr::NAME => 'Relojes',
                SubcategoryAttr::SLUG => Str::slug('Relojes'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 5,
                SubcategoryAttr::NAME => 'Lentes',
                SubcategoryAttr::SLUG => Str::slug('Lentes'),
            ],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
