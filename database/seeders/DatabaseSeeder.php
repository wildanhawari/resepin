<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Resepin',
            'email' => 'admin@resepin.com',
            'phone_number' => '0000000000', //0 10x
            'avatar' => 'images/default-avatar.png',
            'password' => bcrypt('resepin'),
        ]);
    }
}
