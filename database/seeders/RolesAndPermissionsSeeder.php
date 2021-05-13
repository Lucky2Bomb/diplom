<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Role::create(['name' => 'ADMIN']);
        Role::create(['name' => 'GROUPS']);
        Role::create(['name' => 'USER']);
        Role::create(['name' => 'USERS-MANAGEMENT']);
        Role::create(['name' => 'PUBLICATIONS']);
        Role::create(['name' => 'NEWS']);
    }
}
