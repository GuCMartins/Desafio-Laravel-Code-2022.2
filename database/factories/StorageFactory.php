<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Storage>
 */
class StorageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            /*$storage = Storage::factory()
                ->count(1)
                ->state(new Sequence(
                    fn ($sequence) => ['products' => Product::all()->random(),'data'=>now(),'amount'=>rand(0,100)],
                ))
                ->create()
            */
            'product_id' => Product::inRandomOrder()->first()->id,
            'amount'=> rand(0,10),
            'data'=>now(),       
        ];
    }
}
