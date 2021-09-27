<?php

namespace Database\Seeders;

use App\Models\subkategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubkategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subkategoris = [
            'kategori_id' => 1,
            'nama' => 'kebutuhan sekunder',
            'created_at' => new \DateTime(),
            'updated_at' => null,
        ];
        [
            'kategori_id' => 1,
            'nama' => 'kebutuhan pokok',
            'created_at' => new \DateTime(),
            'updated_at' => null,
        ];
        [
            'kategori_id' => 1,
            'nama' => 'jalan jalan',
            'created_at' => new \DateTime(),
            'updated_at' => null,
        ];
        [
            'kategori_id' => 1,
            'nama' => 'asuransi atau kesehatan',
            'created_at' => new \DateTime(),
            'updated_at' => null,
        ];
        [
            'kategori_id' => 1,
            'nama' => 'darurat',
            'created_at' => new \DateTime(),
            'updated_at' => null,
        ];
        DB::table('subkategoris')->insert($subkategoris);
    }
}
