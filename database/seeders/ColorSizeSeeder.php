<?php

namespace Database\Seeders;

use App\Models\Info\ColorSizeAttr;
use App\Models\Size;
use Illuminate\Database\Seeder;

class ColorSizeSeeder extends Seeder
{
    public function run()
    {
        $sizes = Size::all();

        foreach ($sizes as $size){
            $size->colors()->attach([
                1 => [
                    ColorSizeAttr::QUANTITY => 10
                ],
                2 => [
                    ColorSizeAttr::QUANTITY => 10
                ],
                3 => [
                    ColorSizeAttr::QUANTITY => 10
                ],
                4 => [
                    ColorSizeAttr::QUANTITY => 10
                ],
            ]);
        }
    }
}
