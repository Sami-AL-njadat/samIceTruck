<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Sami Alnajadat',
                'email' => 'sami.alnajadat@gmail.com',
                'password' => Hash::make('sam@123456789'),
            ],
            [
                'name' => 'Alghraibah Idrees',
                'email' => 'alghraibahidrees@gmail.com',
                'password' => Hash::make('sam@123456789'),
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(['email' => $user['email']], $user);
        }
    }
}
