<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           User::create([
            'firstName' => 'Super',
            'lastName' => 'Admin',
            'email' => 'admin@triptrek.com',
            'password' => bcrypt('admin1234'), 
            'isActive' => true,
        ]);
    }
}
