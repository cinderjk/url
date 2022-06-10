<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        User::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
        ]);

        $this->call(UrlSeeder::class);
    }
    
}
