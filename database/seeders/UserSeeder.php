<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'nama' => "affan ramzi",
            'email' => 'ifnara@gmail.com',
            'password' => '123',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ];
        DB::table('users')->insert($users);

    }
}
