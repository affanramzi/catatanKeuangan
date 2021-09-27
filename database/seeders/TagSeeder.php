<?php

namespace Database\Seeders;

use App\Models\tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = [
            'nama' => 'arisan',
            'created_at' => new \DateTime(),
            'updated_at' => null,
        ];
        DB::table('tags')->insert($tags);
    }
}
