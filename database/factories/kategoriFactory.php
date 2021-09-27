<?php

namespace Database\Factories;

use App\Models\kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class kategoriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = kategori::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = $this->faker->nik();
        $nama = $this->faker->sentence(2);
        return [
            //
            'id' => $id,
            'nama' => $nama,
            'created_at' => new \DateTime,
            'updated_at' => null,
        ];
    }
}
