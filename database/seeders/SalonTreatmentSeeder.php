<?php

namespace Database\Seeders;

use App\Models\SalonTreatment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalonTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SalonTreatment::create([
            'name' => 'Haircut',
            'image' => 'haircut.png',
            'price' => 65000,
        ]);

        SalonTreatment::create([
            'name' => 'Manicure',
            'image' => 'manicure.png',
            'price' => 50000,
        ]);

        SalonTreatment::create([
            'name' => 'Pedicure',
            'image' => 'pedicure.png',
            'price' => 85000,
        ]);

        SalonTreatment::create([
            'name' => 'Nail Art',
            'image' => 'nail-art.png',
            'price' => 125000,
        ]);

        SalonTreatment::create([
            'name' => 'Massage',
            'image' => 'massage.png',
            'price' => 95000,
        ]);
    }
}
