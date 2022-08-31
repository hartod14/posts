<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Hari',
                'email' => 'admin@pmb.com',
                'password' => Hash::make('admin123'),
                'photo_profile' => 'images/admin.jpeg',
                'status' => 'admin',
            ],
        ]);
    }
}
