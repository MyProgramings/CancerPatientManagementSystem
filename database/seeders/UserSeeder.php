<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_id = Role::where('key','administrator')->first()->id;

        User::firstOrCreate([
            'name'              => 'Admin',
            'username'          => 'admin',
            'email'             => 'admin@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'), // password
            'remember_token'    => Str::random(10),
            'role_id'           => $role_id,
            'last_seen'         => null,
        ]);
    }
}
