<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'teststore@gmail.com'], 
            [
                'name'     => 'System Admin',
                'password' => Hash::make('password123'), 
                'role'     => 'admin', 
                'email_verified_at' => Carbon::now(),
            ]
        );
    }
}