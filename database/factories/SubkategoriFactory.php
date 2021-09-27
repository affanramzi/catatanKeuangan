<?php

namespace Database\Factories;

use App\Models\Subkategori;
use App\Models\kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubkategoriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subkategori::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $kategori = Kategori::fakctory()->create();
        $id = $this->faker->nik();
        $nama = $this->faker->sentence(2);
        return [
            //
            'id' => $id,
            'subkategori_id' => $kategori->id,
            'nama' => $nama,
            'created_at' => new \DateTime,
            'updated_at' => null,
        ];
    }
}
