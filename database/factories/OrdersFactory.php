<?php

namespace Database\Factories;
use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'producto'=>$this->faker->text(15),
            'nombre'=>$this->faker->name,
            'telefono'=>$this->faker->text(7,"123456789"),
            'direccion'=>$this->faker->text(30),
            //
        ];
    }
}
