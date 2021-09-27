<?php

namespace Database\Seeders;

use App\Models\transaksi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use League\CommonMark\Node\Block\Paragraph;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $transaksis = [
            'user_id' => 1,
            'akun_id' => 1,
            'kategori_id' => 1,
            'subkategori_id' => 1,
            'tag_id' => 1,
            'nominal' => 2000000,
            'tanggal' => new \DateTime(),
            'keterangan' => 'aaaaaaaaaaa',
            'created_at' => new \DateTime(),
            'updated_at' => null,
        ];
        DB::table('transaksis')->insert($transaksis);
    }
}
