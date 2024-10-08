<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Medicine::create(
        //     [
        //         'name'  =>  'Obat1',
        //         'price' =>  10000,
        //         'count' =>  100,
        //         'code'  =>  'Obatobatan',
        //         'description' => 'obat obatan',
        //         'pic_url'   =>  'url2',
        //     ]
        // );

        Medicine::factory()->count(100)->create();
    }
}
