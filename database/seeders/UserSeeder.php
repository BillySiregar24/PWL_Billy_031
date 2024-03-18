<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'Billy',
            'email' => 'yohanesbilly245@gmail.com',
            'password' => password_hash('SIREGAR2405', PASSWORD_DEFAULT)
        ]);
    }
}
