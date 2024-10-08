<?php

namespace Database\Factories;

use App\Models\Medicine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicines>
 */
class MedicineFactory extends Factory
{
    protected $model = Medicine::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name'  =>  fake()->words(3, true),
            'price' =>  rand(1,100)*1000,
            'count' =>  rand(1,50),
            'description' => fake()->text(100),
            'code'  =>  'obat-'.rand(1,1000),
            'pic_url'   =>  fake()->imageUrl(),
        ];
    }
}
