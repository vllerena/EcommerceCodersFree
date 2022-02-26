<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Info\BrandAttr;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run()
    {
        $brands = [
            [
                BrandAttr::NAME => 'Asus',
            ],
            [
                BrandAttr::NAME => 'HP',
            ],
            [
                BrandAttr::NAME => 'Lenovo',
            ],
            [
                BrandAttr::NAME => 'Dell',
            ],
            [
                BrandAttr::NAME => 'AOC',
            ],
            [
                BrandAttr::NAME => 'Advance',
            ],
            [
                BrandAttr::NAME => 'Intel',
            ],
            [
                BrandAttr::NAME => 'AMD',
            ],
            [
                BrandAttr::NAME => 'LG',
            ],
            [
                BrandAttr::NAME => 'Samsung',
            ],
            [
                BrandAttr::NAME => 'Epson',
            ],
            [
                BrandAttr::NAME => 'Canon',
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
