<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Resepin',
            'email' => 'admin@resepin.com',
            'phone_number' => '0000000000', //0 10x
            'avatar' => 'images/default-avatar.png',
            'password' => bcrypt('resepin'),
        ]);
    }
}
