<?php

namespace Database\Seeders;

use App\Models\Salon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $salons = [
            [
                'name' => 'Downtown Jakarta',
                'address' => 'Jakarta',
                'phone' => '08123456789',
            ],
            [
                'name' => 'Downtown Bandung',
                'address' => 'Bandung',
                'phone' => '08123456789',
            ],
            [
                'name' => 'Downtown Surabaya',
                'address' => 'Surabaya',
                'phone' => '08123456789',
            ],
            [
                'name' => 'Downtown Semarang',
                'address' => 'Semarang',
                'phone' => '08123456789',
            ],
            [
                'name' => 'Downtown Yogyakarta',
                'address' => 'Yogyakarta',
                'phone' => '08123456789',
            ],
        ];

        foreach ($salons as $salon) {
            Salon::create($salon);
        }
    }
}
