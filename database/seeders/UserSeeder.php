<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'farmer',
            'email'=>'farmer@gmail.com',
            'password'=>'12345678'
        ])->assignRole('farmer');

        User::create([
            'name'=>'customer',
            'email'=>'customer@gmail.com',
            'password'=>'12345678'
        ])->assignRole('customer');
    }
}
