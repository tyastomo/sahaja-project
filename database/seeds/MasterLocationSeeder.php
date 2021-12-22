<?php

use Illuminate\Database\Seeder;
use App\Models\Locations;

class MasterLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Locations::create([
            'uuid' => generateUuid(),
            'name' => 'Yogyakarta',
            'location_code' => 'YK'
        ]);
        Locations::create([
            'uuid' => generateUuid(),
            'name' => 'Solo',
            'location_code' => 'SOC'
        ]);
        Locations::create([
            'uuid' => generateUuid(),
            'name' => 'Temanggung',
            'location_code' => 'TMG'
        ]);
    }
}
