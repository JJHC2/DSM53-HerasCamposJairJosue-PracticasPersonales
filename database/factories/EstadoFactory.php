<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estado>
 */
class EstadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            $estados = [
                ['nombre_est' => 'Aguascalientes', 'abreviatura_est' => 'AGS'],
                ['nombre_est' => 'Baja California', 'abreviatura_est' => 'BC'],
                ['nombre_est' => 'Baja California Sur', 'abreviatura_est' => 'BCS'],
                ['nombre_est' => 'Campeche', 'abreviatura_est' => 'CAM'],
                ['nombre_est' => 'Coahuila', 'abreviatura_est' => 'COA'],
                ['nombre_est' => 'Colima', 'abreviatura_est' => 'COL'],
                ['nombre_est' => 'Chiapas', 'abreviatura_est' => 'CHI'],
                ['nombre_est' => 'Chihuahua', 'abreviatura_est' => 'CHH'],
                ['nombre_est' => 'Ciudad de México', 'abreviatura_est' => 'CDMX'],
                ['nombre_est' => 'Durango', 'abreviatura_est' => 'DUR'],
                ['nombre_est' => 'Guanajuato', 'abreviatura_est' => 'GTO'],
                ['nombre_est' => 'Guerrero', 'abreviatura_est' => 'GRO'],
                ['nombre_est' => 'Hidalgo', 'abreviatura_est' => 'HGO'],
                ['nombre_est' => 'Jalisco', 'abreviatura_est' => 'JAL'],
                ['nombre_est' => 'Estado de México', 'abreviatura_est' => 'MEX'],
                ['nombre_est' => 'Michoacán', 'abreviatura_est' => 'MIC'],
                ['nombre_est' => 'Morelos', 'abreviatura_est' => 'MOR'],
                ['nombre_est' => 'Nayarit', 'abreviatura_est' => 'NAY'],
                ['nombre_est' => 'Nuevo León', 'abreviatura_est' => 'NL'],
                ['nombre_est' => 'Oaxaca', 'abreviatura_est' => 'OAX'],
                ['nombre_est' => 'Puebla', 'abreviatura_est' => 'PUE'],
                ['nombre_est' => 'Querétaro', 'abreviatura_est' => 'QRO'],
                ['nombre_est' => 'Quintana Roo', 'abreviatura_est' => 'QR'],
                ['nombre_est' => 'San Luis Potosí', 'abreviatura_est' => 'SLP'],
                ['nombre_est' => 'Sinaloa', 'abreviatura_est' => 'SIN'],
                ['nombre_est' => 'Sonora', 'abreviatura_est' => 'SON'],
                ['nombre_est' => 'Tabasco', 'abreviatura_est' => 'TAB'],
                ['nombre_est' => 'Tamaulipas', 'abreviatura_est' => 'TAMPS'],
                ['nombre_est' => 'Tlaxcala', 'abreviatura_est' => 'TLAX'],
                ['nombre_est' => 'Veracruz', 'abreviatura_est' => 'VER'],
                ['nombre_est' => 'Yucatán', 'abreviatura_est' => 'YUC'],
                ['nombre_est' => 'Zacatecas', 'abreviatura_est' => 'ZAC'],
            ];
            return $estados[$this->faker->numberBetween(0, count($estados) - 1)];

    }
}
