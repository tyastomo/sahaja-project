<?php

use Illuminate\Database\Seeder;
use App\Models\TimeService;

class MasterTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TimeService::create([
            'uuid' => generateUuid(),
            'name' => 'Pagi',
            'start_hour' => '04:00:00',
            'end_hour' => '15:00:00'
        ]);
        TimeService::create([
            'uuid' => generateUuid(),
            'name' => 'Siang',
            'start_hour' => '09:00:00',
            'end_hour' => '22:00:00'
        ]);
        TimeService::create([
            'uuid' => generateUuid(),
            'name' => 'Malam',
            'start_hour' => '13:00:00',
            'end_hour' => '01:00:00'
        ]);
    }
}
