<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nome" => $this->faker->name(),
            "telefone" => $this->faker->phoneNumber(),
            "email" => $this->faker->email(),
            "motivo_contato" => $this->faker->numberBetween(1,6),
            "mensagem" => $this->faker->text(150)
        ];
    }
}
