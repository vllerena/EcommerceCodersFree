<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;
use App\Models\Size;
use App\Models\Info\SizeAttr;

class SizeSeeder extends Seeder
{
    public function run()
    {
        $products = Product::whereHas('subcategory', function (Builder $query){
            $query->where('color', true)
                ->where('size', true);
        })->get();

        $sizes = ['Small', 'Medium', 'Large', 'Extra Large'];

        foreach ($products as $product){
            foreach ($sizes as $size){
                $product->sizes()->create([
                    SizeAttr::NAME => $size,
                ]);
            }
        }
    }
}
