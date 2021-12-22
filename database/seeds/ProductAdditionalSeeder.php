<?php

use Illuminate\Database\Seeder;
use App\Models\ProductAdditionalPax;

class ProductAdditionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = 'aacba7bd-4bd3-49d3-b9e5-e41d841060c6';
		$b = 'e3cb4922-796b-4d52-9b8d-b9c1d7885a65';
		$c = '40285fde-c5fe-4b6b-83b4-b948f6493d71';

		//sahaja a
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $a,
			'pax' => 100,
			'cost' => 1000000
        ]);
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $a,
			'pax' => 200,
			'cost' => 2000000
        ]);
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $a,
			'pax' => 300,
			'cost' => 3000000
        ]);
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $a,
			'pax' => 400,
			'cost' => 4000000
        ]);
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $a,
			'pax' => 500,
			'cost' => 5000000
        ]);

		//sahaja b
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $b,
			'pax' => 100,
			'cost' => 1500000
        ]);
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $b,
			'pax' => 200,
			'cost' => 3000000
        ]);
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $b,
			'pax' => 300,
			'cost' => 4500000
        ]);
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $b,
			'pax' => 400,
			'cost' => 6000000
        ]);
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $b,
			'pax' => 500,
			'cost' => 7500000
        ]);

		//sahaja c
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $c,
			'pax' => 100,
			'cost' => 1000000
        ]);
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $c,
			'pax' => 200,
			'cost' => 2000000
        ]);
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $c,
			'pax' => 300,
			'cost' => 3000000
        ]);
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $c,
			'pax' => 400,
			'cost' => 4000000
        ]);
		ProductAdditionalPax::create([
            'uuid' => generateUuid(),
			'product_id' => $c,
			'pax' => 500,
			'cost' => 5000000
        ]);


    }
}
