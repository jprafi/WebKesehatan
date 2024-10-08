<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MedicineSeeder extends Seeder
{
    public function run()
    {
        Medicine::create([
            'name' => 'Paracetamol',
            'price' => 10000,
            'count' => 10,
            'code' => 'PARA-001',
            'description' => 'Obat penurun demam dan pereda nyeri.',
            'Img_url' => 'paracetamol.png',
        ]);

        Medicine::create([
            'name' => 'Ibuprofen',
            'price' => 15000,
            'count' => 20,
            'code' => 'IBU-002',
            'description' => 'Pereda nyeri dan anti inflamasi.',
            'Img_url' => 'ibuprofen.png',
        ]);

        Medicine::create([
            'name' => 'Antibiotik',
            'price' => 20000,
            'count' => 15,
            'code' => 'ANTI-003',
            'description' => 'Obat untuk infeksi bakteri.',
            'Img_url' => 'antibiotik.png',
        ]);

        Medicine::create([
            'name' => 'Vitamin C',
            'price' => 5000,
            'count' => 30,
            'code' => 'VITC-004',
            'description' => 'Suplemen untuk menjaga daya tahan tubuh.',
            'Img_url' => 'vitamin_c.png',
        ]);

        Medicine::create([
            'name' => 'Obat Sakit Kepala',
            'price' => 8000,
            'count' => 25,
            'code' => 'OSK-005',
            'description' => 'Obat untuk meredakan sakit kepala.',
            'Img_url' => 'obat_kepala.png',
        ]);

        Medicine::create([
            'name' => 'Tolak Angin',
            'price' => 6000,
            'count' => 20,
            'code' => 'TOL-006',
            'description' => 'Obat mual dan masuk angin.',
            'Img_url' => 'tolak_angin.png',
        ]);
    }
}
