<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'SopRecisa',
                'email' =>'soprecisa@gmail.com',
                'password' => bcrypt('Recisa2023'),
            ],
        ];
        DB::table('users')->insert($data);
    }
}
