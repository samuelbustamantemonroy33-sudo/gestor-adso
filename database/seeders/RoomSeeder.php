<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        Room::create([
            'room_number' => '101',
            'category' => 'Simple',
            'capacity' => 1,
            'price_per_night' => 80000.00,
            'status' => 'available'
        ]);

        Room::create([
            'room_number' => '102',
            'category' => 'Doble',
            'capacity' => 2,
            'price_per_night' => 120000.00,
            'status' => 'available'
        ]);

        Room::create([
            'room_number' => '201',
            'category' => 'Suite',
            'capacity' => 4,
            'price_per_night' => 250000.00,
            'status' => 'maintenance'
        ]);
    }
}