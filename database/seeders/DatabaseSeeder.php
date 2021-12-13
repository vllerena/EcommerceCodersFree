<?php

namespace Database\Seeders;

use App\Models\Info\CategoryAttr;
use App\Models\Info\ProductAttr;
use App\Models\Info\SubcategoryAttr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Storage::deleteDirectory(ProductAttr::TABLE_NAME);
        Storage::makeDirectory(ProductAttr::TABLE_NAME);
        Storage::deleteDirectory(CategoryAttr::TABLE_NAME);
        Storage::makeDirectory(CategoryAttr::TABLE_NAME);
        Storage::deleteDirectory(SubcategoryAttr::TABLE_NAME);
        Storage::makeDirectory(SubcategoryAttr::TABLE_NAME);
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            SubcategorySeeder::class,
            ProductSeeder::class,
            ColorSeeder::class,
            ColorProductSeeder::class,
            SizeSeeder::class,
        ]);
    }
}
