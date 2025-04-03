<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Amanda',
            'email' => 'amanda@gmail.com',
            'password' => Hash::make('123456'),
            'role'=> 'admin'
        ]);

        Admin::create([
            'cpf' => '12345678901',
            'user_id' => $user->id
        ]);
    }
}
