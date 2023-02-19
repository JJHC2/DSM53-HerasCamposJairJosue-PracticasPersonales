<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Municipio;
use App\Models\Estado;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Municipio>
 */
class MunicipioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Municipio::class;

    public function definition()
    {
        $estados = Estado::all();

        $estado = $estados->random();

        return [
            'nombre_mun' => $this->faker->city,
            'abreviatura_mun' => $this->faker->lexify('???'),
            'estado_id' => $estado->id,
        ];
    }
}
