<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Maulik',
                'email' => 'maulik@admin.com',
                'password' => '123456',
                'role' => 'admin'
            ],
            [
                'name' => 'Maulik',
                'email' => 'maulik@user.com',
                'password' => '123456',
                'role' => 'user'
            ],
        ];

        foreach ($users as $user) {
            $dbUser = User::firstOrCreate(
                ['email' => $user['email']],
                ['name' => $user['name'], 'password' => bcrypt($user['password']), 'email_verified_at' => now()]
            );
            $dbUser->assignRole($user['role']);
        }
        
    }
}
