<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acara>
 */
class AcaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_acara' => fake()->nama_acara(),
            'tanggal_acara' => fake()->tanggal_acara(),
            'instansi_id' => fake()->instansi_id(),
            'template_sertifikat' => fake()->template_sertifikat(),
            //
        ];
    }
}
