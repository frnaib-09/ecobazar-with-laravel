<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = [
            [
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('adminPass')
        ],
            [
            'name' => 'foyjur rafee',
            'username' => 'foyjur.rafee.99',
            'email' => 'foyjurrafee99@gmail.com',
            'password' => Hash::make('password')
        ],
            [
            'name' => 'faisal shourab',
            'username' => 'faisal.shourab',
            'email' => 'shourab.cit.bd@gmail.com',
            'password' => Hash::make('password')
        ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
