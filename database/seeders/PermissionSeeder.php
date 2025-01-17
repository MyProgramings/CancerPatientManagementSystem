<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate([
            'name'      => 'Browse admin',
            'key'       => 'browse_admin',
            'table_name' => null,
        ]);

        Permission::firstOrCreate([
            'name'      => 'Administrator',
            'key'       => 'administrator',
            'table_name' => null,
        ]);

        Permission::firstOrCreate([
            'name'      => 'Banned',
            'key'       => 'banned',
            'table_name' => null,
        ]);

        Permission::generateFor('permissions');
        Permission::generateFor('roles');
        Permission::generateFor('users');
    }
}
