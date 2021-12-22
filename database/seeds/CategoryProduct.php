<?php

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class CategoryProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'uuid' => generateUuid(),
            'name' => 'AKAD',
        ]);

        ProductCategory::create([
            'uuid' => generateUuid(),
            'name' => 'RESEPSI',
        ]);

        ProductCategory::create([
            'uuid' => generateUuid(),
            'name' => 'AKAD & RESEPSI',
        ]);
    }
}
