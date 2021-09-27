<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\akun;
use App\Models\kategori;
use App\Models\subkategori;
use App\Models\User;
use App\Models\tag;
use App\Models\transaksi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // Akun::factory(10)->create();
        // kategori::factory(10)->create();
        // Subkategori::factory(10)->create();
        // Tag::factory(10)->create();
        // Transaksi::factory(10)->create();

        $this->call([
            UserSeeder::class,
            AkunSeeder::class,
            KategoriSeeder::class,
            SubkategoriSeeder::class,
            TagSeeder::class,
            TransaksiSeeder::class
        ]);

    }
}
