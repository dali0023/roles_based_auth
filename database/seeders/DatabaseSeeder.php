<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Role Creating
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'writer']);
        Role::create(['name' => 'user']);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $admin->assignRole(['writer', 'admin']);

        // create writer's
        $writer = User::create([
            'name' => 'writer',
            'email' => 'writer@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $writer->assignRole('writer');
    }
}
