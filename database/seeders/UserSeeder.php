<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataUserNews = [];

            $dataUserNews[] = [
                'login'             => 'news',
                'email'             => 'news@example.com',
                'slug'              => 'news',

                'name'              => 'новости',
                'surname'           => null,
                'patronymic'        => null,

                'position_name'     => "новости",
                'group_id'          => 1,

                'created_at'        => now(),
                'updated_at'        => now(),
                'email_verified_at' => now(),
                'password'          => Hash::make('12345678'),
                'remember_token'    => Str::random(60),
            ];

        DB::table('users')->insert($dataUserNews);
        $userNews = User::where('login', '=', 'news')->firstOrFail();
        $userNews->assignRole('NEWS');

        $dataUserAdmin = [];

            $dataUserAdmin[] = [
                'login'             => 'admin',
                'email'             => 'admin@admin.com',
                'slug'              => 'admin',

                'name'              => 'Администратор',
                'surname'           => null,
                'patronymic'        => null,

                'position_name'     => "администратор",
                'group_id'          => 1,

                'created_at'        => now(),
                'updated_at'        => now(),
                'email_verified_at' => now(),
                'password'          => Hash::make('12345678'),
                'remember_token'    => Str::random(60),
            ];

        DB::table('users')->insert($dataUserAdmin);
        $userNews = User::where('login', '=', 'admin')->firstOrFail();
        $userNews->assignRole('ADMIN');

        $dataUser = [];

        $dataUser[] = [
            'login'             => 'user',
            'email'             => 'user@user.com',
            'slug'              => 'user',

            'name'              => 'Иван',
            'surname'           => 'Иванов',
            'patronymic'        => 'Иванович',

            'position_name'     => "студент",
            'group_id'          => 4,

            'created_at'        => now(),
            'updated_at'        => now(),
            'email_verified_at' => now(),
            'password'          => Hash::make('12345678'),
            'remember_token'    => Str::random(60),
        ];

    DB::table('users')->insert($dataUser);
    $userNews = User::where('login', '=', 'user')->firstOrFail();
    $userNews->assignRole('USER');

    }
}
