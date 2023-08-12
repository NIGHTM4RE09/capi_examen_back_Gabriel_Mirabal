<?php

namespace Database\Factories;

use App\Models\UserDomicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDomicilio>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = UserDomicilio::class;
    
    public function definition(): array
    {
        
        return [
            'domicilio' => fake()->streetName(),
            'numero_exterior' => fake()->buildingNumber(),
            'colonia' => fake()->sentence(1),
            'cp' => fake()->postcode(),
            'ciudad' => fake()->city(),
            'fecha_nacimiento' => fake()->date(),
        ];
    }
}
