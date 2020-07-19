<?php

use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Hotel::class, 3)->create()->each(function($hotel) {
            $hotel->rooms()->createMany(factory(App\Room::class, 3)->make()->toArray());
        });
    }
}
