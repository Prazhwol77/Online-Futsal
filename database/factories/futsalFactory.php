<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class futsalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>'1',
            'FutsalName' => $this->faker->name(),
            'address' => $this->faker->sentence(),
            'City' => $this->faker->sentence(),
            'State'=>$this->faker->sentence(),
            'PhoneNumber'=>$this->faker->randomnumber(),
            'ZipCode'=>$this->faker->randomnumber(6),
            'description'=>$this->faker->sentence(),
            'price'=>$this->faker->randomnumber(3)
        ];
    }
}
