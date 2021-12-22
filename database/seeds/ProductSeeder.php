<?php

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'uuid' => generateUuid(),
            'name' => 'Sahaja A',
            'category_product_id' => '3a56d0d5-f270-4e43-bc54-f3bf48201428',
            'price' => '4500000'
        ]);

        Products::create([
            'uuid' => generateUuid(),
            'name' => 'Sahaja B',
            'category_product_id' => 'e0c013ac-f821-4feb-b459-002fd46326d9',
            'price' => '7000000'
        ]);

        Products::create([
            'uuid' => generateUuid(),
            'name' => 'Sahaja C',
            'category_product_id' => '3dc4526e-465d-4e50-98b5-775e2f0ed18f',
            'price' => '5500000'
        ]);
    }
}
