<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kategoris = [
            'nama' => 'tahunan',
            'created_at' => new \DateTime(),
            'updated_at' => null,
        ];
        [
            'nama' => 'bulanan',
            'created_at' => new \DateTime(),
            'updated_at' => null,
        ];
        [
            'nama' => 'harian',
            'created_at' => new \DateTime(),
            'updated_at' => null,
        ];
        DB::table('kategoris')->insert($kategoris);
    }
}
