<?php

namespace Database\Factories;
use App\Model\Station;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StationFactory extends Factory
{

    protected $model=Station::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

            'title'=>$this->faker->sentence(rand(1,9)),
            'description'=>$this->faker->text(200),
        ];
    }
}
