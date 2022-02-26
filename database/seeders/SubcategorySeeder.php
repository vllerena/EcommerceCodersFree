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
                SubcategoryAttr::NAME => 'Laptop',
                SubcategoryAttr::SLUG => Str::slug('Laptop'),
                SubcategoryAttr::COLOR => true
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 1,
                SubcategoryAttr::NAME => 'Tablet',
                SubcategoryAttr::SLUG => Str::slug('Tablet'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 1,
                SubcategoryAttr::NAME => 'Laptop Gamer',
                SubcategoryAttr::SLUG => Str::slug('Laptop Gamer'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 2,
                SubcategoryAttr::NAME => 'Hogar y Oficina',
                SubcategoryAttr::SLUG => Str::slug('Hogar y Oficina'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 2,
                SubcategoryAttr::NAME => 'Línea Empresarial',
                SubcategoryAttr::SLUG => Str::slug('Línea Empresarial'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 3,
                SubcategoryAttr::NAME => 'Placa Madre Gamer',
                SubcategoryAttr::SLUG => Str::slug('Placa Madre Gamer'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 3,
                SubcategoryAttr::NAME => 'Audífonos Gamer',
                SubcategoryAttr::SLUG => Str::slug('Audífonos Gamer'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 3,
                SubcategoryAttr::NAME => 'Accesorios Gamer',
                SubcategoryAttr::SLUG => Str::slug('Accesorios Gamer'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 4,
                SubcategoryAttr::NAME => 'Placa Madre',
                SubcategoryAttr::SLUG => Str::slug('Placa Madre'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 4,
                SubcategoryAttr::NAME => 'Disco Duro',
                SubcategoryAttr::SLUG => Str::slug('Nintendo DS'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 5,
                SubcategoryAttr::NAME => 'Monitores',
                SubcategoryAttr::SLUG => Str::slug('Monitores'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 5,
                SubcategoryAttr::NAME => 'Proyectores',
                SubcategoryAttr::SLUG => Str::slug('Proyectores'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 6,
                SubcategoryAttr::NAME => 'Impresoras',
                SubcategoryAttr::SLUG => Str::slug('Impresoras'),
            ],
            [
                SubcategoryAttr::CATEGORY_ID => 6,
                SubcategoryAttr::NAME => 'Ticketeras',
                SubcategoryAttr::SLUG => Str::slug('Ticketeras'),
            ],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::create($subcategory);
        }
    }
}
