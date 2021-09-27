<?php

namespace Database\Factories;

use App\Models\Akun;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

class AkunFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Akun::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = $this->faker->nik();
        $nama = $this->faker->sentence(2);
            return[
                'id' => $id,
                'nama' => $nama,
                'jenis' => 'tabungan',
                'created_at' => new \DateTime(),
                'updated_at' => null,
            ];
        }

    }
