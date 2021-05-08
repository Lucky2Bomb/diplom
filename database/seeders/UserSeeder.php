<?php

namespace Database\Seeders;

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
        $data = [];

            $data[] = [
                'login'             => 'news',
                'email'             => 'news@example.com',
                'slug'              => 'news',

                'name'              => 'новости',
                'surname'           => null,
                'patronymic'        => null,

                'position_name'     => "новости",

                'created_at'        => now(),
                'updated_at'        => now(),
                'email_verified_at' => now(),
                'password'          => Hash::make('12345678'),
                'remember_token'    => Str::random(60),
            ];

        DB::table('users')->insert($data);
    }
}
