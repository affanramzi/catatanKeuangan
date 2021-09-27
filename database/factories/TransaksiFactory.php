<?php

namespace Database\Factories;

use App\Models\Transaksi;
use App\Models\user;
use App\Models\akun;
use App\Models\kategori;
use App\Models\subkategori;
use App\Models\tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaksi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = user::fakctory()->create();
        $akun = akun::fakctory()->create();
        $kategori = Kategori::fakctory()->create();
        $subkategori = subKategori::fakctory()->create();
        $tag = tag::fakctory()->create();

        $id = $this->faker->nik();
        $nominal = $this->faker->randomNumber(5, false);
        $tanggal = $this->faker->date();
        $keterangan = $this->faker->paragraph();
        return [
            //
            'id' => $id,
            'user_id' => $user->id,
            'akun_id' => $akun->id,
            'kategori_id' => $kategori->id,
            'subkategori_id' => $subkategori->id,
            'tag_id' => $tag->id,
            'nominal' => $nominal,
            'tanggal' => $tanggal,
            'keterangan' => $keterangan,
            'created_at' => new \DateTime,
            'updated_at' => null,
        ];
    }
}
