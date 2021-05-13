<?php

namespace Database\Seeders;

use App\Models\Publications\Publication;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PositionSeeder::class);
        $this->call(GroupUniversitySeeder::class);
        $this->call(GroupFacultySeeder::class);
        $this->call(GroupSpecialtySeeder::class);
        $this->call(GroupFormOfStudyingSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UserSeeder::class);

        $users = User::factory(100)->create();
        foreach($users as $user) {
            $user->assignRole('USER');
        }
        Publication::factory(65)->create();
    }
}
