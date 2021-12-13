<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Info\ColorAttr;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    public function run()
    {
        $colors = ['White', 'Blue', 'Red', 'Black'];

        foreach ($colors as $color){
            Color::create([
                ColorAttr::NAME => $color
            ]);
        }
    }
}
